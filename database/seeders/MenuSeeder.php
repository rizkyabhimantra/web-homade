<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\MenuPrice;
use App\Models\MenuSchedule;
use App\Models\Package;
use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{

    private $currentMenu = [];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                "name" => "Nasi Kuning Ayam Goreng Lengkuas",
                "description" => "-",
                "vegetable" => "Lalapan",
                "side_dish" => "Tempe orek Kering, Telur Dadar Iris",
                "chili_sauce" => "Sambal Goreng",
                "date_at" => now(),
            ],
            [
                "name" => "Nasi Kuning Tongkol Balado Suwir",
                "description" => "-",
                "vegetable" => "Lalapan",
                "side_dish" => "Tempe orek Kering, Telur Dadar Iris",
                "chili_sauce" => "Sambal Goreng",
                "date_at" => now(),
            ],
            [
                "name" => "Mie Goreng Ayam (Mie Pengganti Nasi)",
                "description" => "-",
                "vegetable" => "Acar",
                "side_dish" => "Telor Ceplok",
                "chili_sauce" => "Saus Sachet",
                "date_at" => now()->addDays(1),
            ],
            [
                "name" => "Ayam Cabe Garam",
                "description" => "-",
                "vegetable" => "Salad Jepang",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Chili Oil",
                "date_at" => now()->addDays(1),
            ],
            [
                "name" => "Ayam Brokoli",
                "description" => "-",
                "vegetable" => "brokoli",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Chili Oil",
                "date_at" => now()->addDays(2),
            ],
            [
                "name" => "Ayam Panggang",
                "description" => "-",
                "vegetable" => "Brokoli",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Chili Oil",
                "date_at" => now()->addDays(2),
            ],
            [
                "name" => "Ikan mas",
                "description" => "-",
                "vegetable" => "Salad Jepang",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Sachet",
                "date_at" => now()->addDays(3),
            ],
            [
                "name" => "Mie Ayam Panggang",
                "description" => "-",
                "vegetable" => "Salad Jepang",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Sachet",
                "date_at" => now()->addDays(3),
            ],
            [
                "name" => "(Seafood) Cumi Bakar",
                "description" => "-",
                "vegetable" => "Kangkung",
                "side_dish" => "Ayam panggang",
                "chili_sauce" => "Chili Oil",
                "date_at" => now()->addDays(4),
            ],
            [
                "name" => "(Seafood) Cumi Rebus",
                "description" => "-",
                "vegetable" => "Kangkung",
                "side_dish" => "Telur Ceplok",
                "chili_sauce" => "Chili Oil",
                "date_at" => now()->addDays(4),
            ],
            [
                "name" => "Sapi Panggang",
                "description" => "-",
                "vegetable" => "Sawi",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Sachet",
                "date_at" => now()->addDays(5),
            ],
            [
                "name" => "Kambing Panggang",
                "description" => "-",
                "vegetable" => "Sawi",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Chili Oil",
                "date_at" => now()->addDays(5),
            ],
            [
                "name" => "Bakmie Jawa",
                "description" => "-",
                "vegetable" => "Sawi",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Sachet",
                "date_at" => now()->addDays(6),
            ],
            [
                "name" => "Bakmie Sumatera",
                "description" => "-",
                "vegetable" => "Sawi",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Chili Oil",
                "date_at" => now()->addDays(6),
            ],
             [
                "name" => "Ayam Suwir",
                "description" => "-",
                "vegetable" => "Lalapan",
                "side_dish" => "Tempe orek Kering, Telur Dadar Iris",
                "chili_sauce" => "Sachet",
                "date_at" => now()->addDays(7),
            ],
             [
                "name" => "Nasi Goreng",
                "description" => "-",
                "vegetable" => "Lalapan",
                "side_dish" => "Tempe orek Kering, Telur Dadar Iris, Ayam panggang",
                "chili_sauce" => "Sachet",
                "date_at" => now()->addDays(7),
            ],
        ];

        foreach ($menus as $menu) {
            $packages = Package::inRandomOrder()->limit(3)->get('id');
            $categories = Category::inRandomOrder()->limit(2)->get('id');
            $themeID = Theme::inRandomOrder()->value('id');

            $newMenu = Menu::create([
                "id_theme" => $themeID,
                "name" => $menu['name'],
                "description" => $menu['description'],
                "vegetable" => $menu['vegetable'],
                "side_dish" => $menu['side_dish'],
                "chili_sauce" => $menu['chili_sauce'],
                "image_url" => "https://res.cloudinary.com/ddiulakke/image/upload/v1773558790/menu-ayam-panggang-klaten_mboia7.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ]);

            foreach ($categories as $category) {
                MenuCategory::create([
                    "id_category" => $category->id,
                    "id_menu" => $newMenu->id,
                    "created_at" => now(),
                    "updated_at" => now()
                ]);
            }

            foreach ($packages as $package) {
                MenuPrice::create([
                    "id_menu" => $newMenu->id,
                    "id_package" => $package->id,
                    "price" => random_int(25000, 42000),
                    "created_at" => now(),
                    "updated_at" => now(),
                ]);
            }
            MenuSchedule::create([
                "id_menu" => $newMenu->id,
                "date_at" => $menu['date_at'],
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}
