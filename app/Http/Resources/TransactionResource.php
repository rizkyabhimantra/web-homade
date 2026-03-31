<?php

namespace App\Http\Resources;

use App\Utils\ConvertDateSafely;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'total_price' => $this->total_price,
            'category' => $this->category,
            'status' => $this->currentStatus(),
            'delivery_info' => [
                'status' => $this->status_delivery,
                'delivery_at' => $this->delivery_at,
                'shift' => $this->getDeliveryShift(),
                'estimate_hour' => $this->estimateHour(),
                'address_info' => new UserAddressResource($this->address)
            ],
            'refund_info' => [
                'status' => $this->refund_statis,
                'reason' => $this->refund_reason,
                'is_refund' => $this->isRefund($this->status),
            ],
            'items' => $this->orders->map(function ($order) {
                return [
                    'name' => $order->menu_price->menu->name,
                    'vegetable' => $order->menu_price->menu->vegetable,
                    'side_dish' => $order->menu_price->menu->side_dish,
                    'chili_sauce' => $order->menu_price->menu->chili_sauce,
                    'image_url' => $order->menu_price->menu->image_url,
                    'theme' => $order->menu_price->menu->theme->name,
                    'categories' => $order->menu_price->menu->menu_categories->map(function ($category) {
                        return $category->categories->name;
                    }),
                    'package' => $order->menu_price->package->name,
                ];
            }),
            'created_at' => $this->created_at,
        ];
    }

   


}
