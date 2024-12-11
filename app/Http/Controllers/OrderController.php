<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class OrderController extends Controller
{
public function index(){
    $cart = session()->get('cart', []);
    $totalPrice= $this->calculateTotalPrice($cart);
    $orders = Order::all(); // Fetch all orders, adjust query as per your needs
        
    return Inertia::render('Public/total',['cart'=>$cart,'totalPrice'=>$totalPrice]);
}

private function calculateTotalPrice(array $cart): float
    {
        $totalPrice = 0;

        foreach ($cart as $item) {
            $totalPrice += $item['quantity'] * $item['price']; // Sử dụng giá giảm giá
        }
        return $totalPrice;
    }

public function admin(){
    $orders=DB::table('orders')->get();
    return Inertia::render('Admin/order/index',['orders'=>$orders]);
}




public function show(){
        $order=DB::table('orders')->get();
        return Inertia::render('Admin/order/index',['orders'=>$order]);
}
    public function store(Request $request) : RedirectResponse

    {
        order::create([
            'id' =>  $request->id,
            'id_client' =>$request->id_client,
            'id_employee' =>$request->id_employee,
            'name' =>  $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'status' => $request->status,
            
        ]);

        return Redirect::route('orders.index');
        

        

       
    }
}
