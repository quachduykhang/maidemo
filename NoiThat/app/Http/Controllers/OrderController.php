<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;
class OrderController extends Controller
{
public function index(){
    $orders = Order::all(); // Fetch all orders, adjust query as per your needs
        
    return Inertia::render('Public/total');
}


    public function store(Request $request)
    {
        $orderData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'total' => 'required|numeric'
        ]);

        $order = Order::create($orderData);

        foreach ($request->order_details as $detail) {
            $order->details()->create($detail);
        }

        return response()->json(['message' => 'Order created successfully', 'order_id' => $order->id], 201);
    }
}
