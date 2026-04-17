<?php
namespace App\Service;
use App\Models\Category;
use App\Models\MenuCategory;

class CategoryService{

    public function all(
        string|null $search = null,
        $limit = 3,
        bool $is_has_limit = true,
        string|null $status = 'active',
        bool $is_query = false,
    ){
        $categories = Category::query()->orderByDesc('created_at');

        if($status === 'all'){
            $categories->withTrashed();
        }else if($status === 'deleted'){
            $categories->onlyTrashed();
        }

        $categories->when($search, function($query, $search){
            $search = strtolower($search);
            return $query->whereRaw('LOWER(name) LIKE ?',"%$search%");
        });
        if($is_has_limit){
            return $categories->paginate($limit);
        }

        if($is_query){
            return $categories;
        }

        return $categories->get();
    }

    public function detail(
        string $id,
        bool $with_deleted_data = false,
    ){
        return Category::withTrashed($with_deleted_data)
        ->where('id',$id)->first();
    }

    public function save(string $name){
        return Category::create([
            'name' => $name,
            'created_at' => now(),
            'updated_at_at' => now()
        ]);
    }

    public function edit(Category $category, string $name){
        $category->name = $name;
        $category->save();
        return $category;
    }

    public function delete(
        Category $category
    ){
        $category->delete();
    }

    public function restore(Category $category){
        $category->restore();
    }

    public function getSelectedCategoriesLabel(){

        // sementara pake ini dlu wkwkkw
        // postgress case sensitive wkkw
        $selectedCategories = [
            [ "Nasi" ], [ "Ayam" ], [ "Ikan", "Seafood" ], [ "Sapi", "Kambing" ]
        ];

        $selected = [];
        foreach($selectedCategories as $sc){
            $key = '';
            foreach($sc as $category){
               $key .= $key? ", $category" : $category;
            }
            array_push($selected, [
                'label' => $key,
                'total' => MenuCategory::whereRaw("id_category IN (select id from categories c  where name in (?) )", [$key])->count("id")
            ]);
        }
        return $selected;
    }

}