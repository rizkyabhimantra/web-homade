<?php

namespace App\Service;

use App\Models\Theme;

class ThemeService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function all(
        string|null $search = null,
        $limit = 5,
        bool $is_has_limit = true,
        string|null $status = 'active',
    ) {
        $themes = Theme::query();

        if($status === 'all'){
            $themes->withTrashed();
        }else if($status === 'deleted'){
            $themes->onlyTrashed();
        }

        $themes->when($search, function ($query, $search) {
            $search = strtolower($search);
            return $query->whereRaw('LOWER(name) LIKE ?', "%$search%");
        });
        if($is_has_limit){
            return $themes->paginate($limit);
        }
        return $themes->get();
    }

    public function detail(
        string $id,
        bool $is_for_management = false,
    )
    {
        return Theme::where('id', $id)
        ->withTrashed($is_for_management)
        ->first();
    }

    public function save(array $data)
    {
        return Theme::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    public function edit(Theme $theme, array $data)
    {
        $theme->name = $data['name'];
        $theme->description = $data['description'];
        $theme->save();
        return $theme;
    }

    public function delete(Theme $theme)
    {
        $theme->delete();
    }

    public function restore(Theme $theme){
        $theme->restore();
    }

}
