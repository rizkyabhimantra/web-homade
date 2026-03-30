<?php

namespace App\Models;

use App\Utils\ConvertDateSafely;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_user',
        'subtotal',
        'shipping_cost',
        'sub_total',
        'total_price',
        'total_items',
        'category',
        'status',
        'status_delivery',
        'refund_status',
        'refund_reason',
        'note',
        'delivery_at',
        'contact_email',
        'access_token',
        'is_guest',
        'created_at',
        'updated_at'
    ];

    
    // =================== Relation =====================================

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_transaction')
            ->with('menu_price');
    }

    public function address()
    {
        return $this->hasOne(TransactionAddress::class, 'id_transaction');
    }

    public function payment_proof()
    {
        return $this->hasOne(TransactionPaymentProof::class, 'id_transaction');
    }


    // =====================Method=========================================

    public function getDeliveryShift()
    {
        $delivery_at = (new ConvertDateSafely())->convert($this->delivery_at);
        if (
            $delivery_at->between(
                $delivery_at->clone()->setTime(10, 0, 0),
                $delivery_at->clone()->setTime(12, 0, 0)
            )
        ) {
            return 'Siang';
        } else if (
            $delivery_at->between(
                $delivery_at->clone()->setTime(15, 0, 0),
                $delivery_at->clone()->setTime(17, 0, 0)
            )
        ) {
            return 'Sore';
        }
        return 'Di Luar Shift';
    }

    public function isRefund(string $status): bool
    {
        return $status == 'cancelled_by_customer' || $status == 'cancelled_by_admin';
    }

    public function currentStatus()
    {
        if ($this->status == 'pending') {
            // lebih ngambil status dari payment_method ya..
            if (isset($this->payment_method) && $this->payment_method) {
                return $this->payment_method->status;
            }
        } else if ($this->status == 'paid') {
            return $this->status_delivery;
        }
        return $this->status;
    }


   public function estimateHour(){
    $delivery_at = (new ConvertDateSafely())->convert($this->delivery_at);
    
    // 'H:i' akan menghasilkan format jam:menit (24 jam), misal: 22:05
    return $delivery_at->format('H:i:s');
}



}
