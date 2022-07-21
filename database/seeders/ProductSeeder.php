<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Xiaomi 11 Lite',
                "price" => "29000",
                "description" => "A real technology Flagship Phone with much more feature",
                "category" => "mobile",
                "gallery" => "https://www.powerplanetonline.com/cdnassets/xiaomi_mi_11_lite_6gb_128gb_11_ad_l.jpg"
            ],
            [
                'name' => 'Panasonic fridge',
                "price" => "29000",
                "description" => "A real technology refrigerator in BD",
                "category" => "mobile",
                "gallery" => "https://marsonsbd.com/wp-content/uploads/2018/08/Fridge-NR-BW465XS-01.jpg"
            ],
            [
                'name' => 'Sony TV',
                "price" => "29000",
                "description" => "A real technology Flagship TV in market",
                "category" => "mobile",
                "gallery" => "https://www.tradeinn.com/f/13819/138192974/sony-kd43x81j-43-4k-led-tv.jpg"
            ]
        ]);
    }
}
