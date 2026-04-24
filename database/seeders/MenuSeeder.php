<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\MenuPrice;
use App\Models\MenuSchedule;
use App\Models\Package;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil semua data master dan set key berdasarkan nama, 
        // agar tidak random lagi dan mudah dicocokkan.
        $themes = Theme::all()->keyBy('name');
        $categories = Category::all()->keyBy('name');
        $packages = Package::all();

        // 14 Menu dari Excel, dirancang statis agar related dengan theme & category
        $menus = [
            // --- HARI KE-1 ---
            [
                "name" => "Ayam Acar Kuning",
                "description" => "Ayam dengan bumbu acar kuning segar khas Sunda.",
                "vegetable" => "Tumis Kangkung",
                "side_dish" => "Tempe Goreng Tepung",
                "chili_sauce" => "Sambal Bawang",
                "theme" => "Sunda",
                "categories" => ["Ayam"]
            ],
            [
                "name" => "Pesmol Ikan Kembung",
                "description" => "Ikan kembung goreng dengan bumbu pesmol.",
                "vegetable" => "Lalapan",
                "side_dish" => "Tahu Goreng",
                "chili_sauce" => "Sambal Terasi",
                "theme" => "Sunda",
                "categories" => ["Seafood"] // Valid, nggak random
            ],
            // --- HARI KE-2 ---
            [
                "name" => "Sop Ayam Ala Pak Min",
                "description" => "Sop ayam bening dengan kaldu gurih.",
                "vegetable" => "Acar",
                "side_dish" => "Tempe Mendoan",
                "chili_sauce" => "Sambal Soto",
                "theme" => "Klaten",
                "categories" => ["Ayam"]
            ],
            [
                "name" => "Ayam Bakar Klaten",
                "description" => "Ayam bakar manis gurih khas daerah Klaten.",
                "vegetable" => "Lalapan",
                "side_dish" => "Perkedel, Keripik Tempe",
                "chili_sauce" => "Sambal Bajak",
                "theme" => "Klaten",
                "categories" => ["Ayam"]
            ],
            // --- HARI KE-3 ---
            [
                "name" => "Ayam Saus Asam Manis",
                "description" => "Ayam fillet goreng tepung dengan saus asam manis oriental.",
                "vegetable" => "Cah Buncis Bawang Putih",
                "side_dish" => "Jamur Goreng Tepung",
                "chili_sauce" => "Chili Oil",
                "theme" => "Chinese",
                "categories" => ["Ayam"]
            ],
            [
                "name" => "Gurame Lada Hitam",
                "description" => "Ikan gurame fillet saus lada hitam.",
                "vegetable" => "Tumis Pokcoy",
                "side_dish" => "Tahu Sutra Goreng",
                "chili_sauce" => "Chili Oil",
                "theme" => "Chinese",
                "categories" => ["Seafood"]
            ],
            // --- HARI KE-4 ---
            [
                "name" => "Nasi Uduk Ayam Goreng Kuning",
                "description" => "Nasi uduk gurih disajikan dengan ayam goreng.",
                "vegetable" => "Lalapan",
                "side_dish" => "Bakwan Sayur",
                "chili_sauce" => "Sambal Bu Rudi",
                "theme" => "Betawi",
                "categories" => ["Nasi", "Ayam"] // Multi-category!
            ],
            [
                "name" => "Ayam Penyet Cabe Ijo",
                "description" => "Ayam penyet pedas nampol dengan sambal cabe ijo.",
                "vegetable" => "Lalapan",
                "side_dish" => "Tempe Goreng",
                "chili_sauce" => "Sambal Penyet Ijo",
                "theme" => "Betawi",
                "categories" => ["Ayam"]
            ],
            // --- HARI KE-5 ---
            [
                "name" => "Nasi Tempong Ayam Goreng",
                "description" => "Nasi tempong pedas khas Banyuwangi.",
                "vegetable" => "Sayur Rebus",
                "side_dish" => "Tahu Tempe Goreng",
                "chili_sauce" => "Sambal Tempong",
                "theme" => "Banyuwangi",
                "categories" => ["Nasi", "Ayam"]
            ],
            [
                "name" => "Ayam Cabe Garam",
                "description" => "Ayam fillet krispi bumbu cabe garam.",
                "vegetable" => "Salad Jepang",
                "side_dish" => "Scrambled Egg",
                "chili_sauce" => "Chili Oil",
                "theme" => "Asia",
                "categories" => ["Ayam"]
            ],
            // --- HARI KE-6 ---
            [
                "name" => "Ayam Goreng Kecombrang",
                "description" => "Ayam goreng wangi kecombrang khas Madiun.",
                "vegetable" => "Sayur Pecel Madiun",
                "side_dish" => "Rempeyek",
                "chili_sauce" => "Sambal Pecel",
                "theme" => "Madiun",
                "categories" => ["Ayam"]
            ],
            [
                "name" => "Nila Penyet Cabe Ijo",
                "description" => "Ikan Nila goreng disajikan dengan kremes dan sambal.",
                "vegetable" => "Lalapan",
                "side_dish" => "Tempe Goreng",
                "chili_sauce" => "Sambal Ijo",
                "theme" => "Betawi",
                "categories" => ["Seafood"]
            ],
            // --- HARI KE-7 ---
            [
                "name" => "Gulai Ayam",
                "description" => "Gulai ayam dengan kuah santan kental.",
                "vegetable" => "Rebusan Daun Singkong",
                "side_dish" => "Telur Dadar",
                "chili_sauce" => "Sambal Ijo",
                "theme" => "Padang",
                "categories" => ["Ayam"]
            ],
            [
                "name" => "Gulai Daging",
                "description" => "Gulai daging empuk khas masakan Padang.",
                "vegetable" => "Sayur Nangka",
                "side_dish" => "Perkedel Kentang",
                "chili_sauce" => "Sambal Merah",
                "theme" => "Padang",
                "categories" => ["Sapi"]
            ]
        ];

        // Eksekusi Pembuatan Data
        foreach ($menus as $index => $menu) {
            
            // Dapatkan ID Tema berdasarkan nama
            $theme = $themes->get($menu['theme']);
            
            $newMenu = Menu::create([
                "id_theme" => $theme ? $theme->id : $themes->first()->id, // Fallback jika typo
                "name" => $menu['name'],
                "description" => $menu['description'],
                "vegetable" => $menu['vegetable'],
                "side_dish" => $menu['side_dish'],
                "chili_sauce" => $menu['chili_sauce'],
                "image_url" => "https://res.cloudinary.com/ddiulakke/image/upload/v1773558790/menu-ayam-panggang-klaten_mboia7.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ]);

            // Dapatkan ID Kategori yang RELEVAN, lalu tempelkan
            foreach ($menu['categories'] as $catName) {
                $cat = $categories->get($catName);
                if ($cat) {
                    MenuCategory::create([
                        "id_category" => $cat->id,
                        "id_menu" => $newMenu->id,
                        "created_at" => now(),
                        "updated_at" => now()
                    ]);
                }
            }

            // Harga paket (Tetap Random Harga, tapi id package pasti valid)
            foreach ($packages as $package) {
                MenuPrice::create([
                    "id_menu" => $newMenu->id,
                    "id_package" => $package->id,
                    "price" => random_int(25000, 42000),
                    "created_at" => now(),
                    "updated_at" => now(),
                ]);
            }

            // PENJADWALAN OTOMATIS: 
            // Karena ada 14 menu, `floor($index / 2)` akan mengatur 2 Menu per 1 hari (0, 0, 1, 1, 2, 2, dst)
            $dayOffset = floor($index / 2);
            
            MenuSchedule::create([
                "id_menu" => $newMenu->id,
                "date_at" => Carbon::now()->addDays($dayOffset)->toDateString(),
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
    }
}