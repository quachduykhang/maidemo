<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_detail;
use Illuminate\Support\Facades\Redirect;

class OrderdetailController extends Controller
{
    public function store(Request $request)
    {
        // Nhận dữ liệu từ yêu cầu
        $orderDetails = $request->input('orderDetails', []);

        foreach ($orderDetails as $detail) {
            Order_detail::create([
                'order_id' => $request->order_id,
                'name' => $detail['name'],
                'quality' => $detail['quality'],
                'price' => $detail['price'],
                'discount' => $detail['discount'] ?? 0,
                'total' => $detail['total'],
            ]);
        }

        return Redirect::route('homepage');
    }
}
