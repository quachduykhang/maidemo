<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("vouchers") ->insert([
            "name"=> "Quý khách hàng check in NHÀ MỚI gửi về fanpage “Nội Thất Khang Vân” để nhận ngay VOUCHER GIẢM 40% khi mua nội thất.",
            "points"=> "100",
            "img"=>"voucher1.jgp",
            "discount"=> "20",
            

        ]);
    }
}
