<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\MenuCategory;

class Category extends Model
{
    use HasUuids, SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function menu_categories(){
        return $this->hasMany(MenuCategory::class, 'id_category')
        ->with('menu')
        ->whereHas('menu', function($query){
            return $query->whereNull('deleted_at');
        });
    }

}
