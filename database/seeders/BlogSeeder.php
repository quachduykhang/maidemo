<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("blogs") ->insert([
            "name"=> "Tin tức mới nhất",
            "description"=> "Nhiều loại hàng đồ gỗ được ưu đãi lớn",
            "images"=>"tt1.jpg",
        

        ]);
    
    }
}
