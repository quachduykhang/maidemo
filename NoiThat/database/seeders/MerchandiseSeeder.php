<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("merchandises") ->insert([
            "int_category"=> "401",
            "name"=> "Sofa Milan",
            "quality"=> "D 2600 - W 900 - H 450 (mm)",
            "description"=> "Một kiệt tác về sự thoải mái và phong cách với hứa hẹn sẽ biến không gian sống của bạn trở nên sang trọng hơn và là nơi thư giãn tuyệt vời.",
            "material"=> " a ý Calora",
            "price"=> "16.000",
            "discount"=> "15.000",
            "images"=> "sofa1.png",

        ]);
    }
}
