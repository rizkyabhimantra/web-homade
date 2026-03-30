<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasUuids, SoftDeletes;

    public function menu_categories()
    {
        return $this->hasMany(MenuCategory::class, foreignKey: 'id_menu')
            ->with('categories')
            ->whereHas('categories', function($query){
                $query->whereNull('deleted_at');
            })
            ->select(['id', 'id_menu', 'id_category']);
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'id_theme')
            ->withTrashed()
            ->select(['id', 'name']);
    }

    public function prices()
    {
        return $this->hasMany(MenuPrice::class, 'id_menu')
            ->whereHas('package')
            ->with('package')
            ->select(['id', 'id_menu', 'id_package', 'price']);
    }

    public function schedule()
    {
        return $this->hasMany(MenuSchedule::class, 'id_menu');
    }

    public function weekly(){
        return $this->hasMany(MenuSchedule::class, 'id_menu')
        ->where('date_at', '>' , now());
    }
}
