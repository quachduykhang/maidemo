<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("feedbacks") ->insert([
            "name"=> "Huỳnh Thị Ngọc",
            "address"=> "1 Cộng hòa, Tân Bình",
            "email"=> "Ngoc123@gmail.com",

           "number_phone"=>"09985877",
           "content"=>"tốt",

        ]);
    }
}
