<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clients") ->insert([
            "name"=> "Huỳnh Thị Ngọc",
            "date"=> "1990-10-15",
            "address"=> "1 Cộng hòa, Tân Bình",
            "ponits"=> "120",
            "email"=> "Ngoc123@gmail.com",
            "password"=> Hash::make(":111"),

        ]);
    }
}
