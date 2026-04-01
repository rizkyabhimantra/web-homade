<?php

namespace App\Models;

use App\StatusTransaction;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasUuids, SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'minimum_order',
        'image_url',
        'image_public_id',
        'created_at',
        'updated_at'
    ];

    // package -> menu price -> order -> transaction
    public function success_transactions(){
        return $this->hasMany(MenuPrice::class, 'id_package')
        ->with([
            'order',
        ])
        ->whereHas('order.transaction', function($query){
            return $query->where('status', StatusTransaction::PAID)
            ->orWhere('status', StatusTransaction::SUCCESS);
        });
    }

    public function menus(){
        return $this->hasMany(MenuPrice::class, 'id_package')
        ->with('menu');
    }
}
