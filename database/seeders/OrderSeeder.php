<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("orders") ->insert([
            "id"=> "1",
            "id_client"=> "1",
            "id_employee"=> "1",
            "name"=> "Ngoc123@gmail.com",
           "address"=>"Quận 12",
           "email"=>"Ngoc123@gmail.com",
           "status"=>"đã nhận",

        ]);
    }
}
