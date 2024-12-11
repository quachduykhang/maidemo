<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Http\Resources\CartResource;
use App\Models\CartItem;
use App\Models\Merchandise;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
class CartController extends Controller


{
    // CartController.php
    public function index(): Response
    {
        

        $cart = session()->get('cart', []);
        $totalPrice= $this->calculateTotalPrice($cart);
        return Inertia::render('Public/cart/Cart', ['cart' => $cart,'totalPrice'=>$totalPrice]);
    }

    // Hiển thị giỏ hàng
    public function view(Request $request ,$id= null) : Response
    {

       $cart = $request->session()->get('cart',[]);
      
       if($id){
        $merchandises = Merchandise::where('id','=',$id)->first();
        if($merchandises){
          $itemkey= $id;  
            if(isset($cart[$itemkey])){
                $cart[$itemkey]['quantity']++;
           }
            else{
                $cart[$itemkey]=[
                    'id'=>$merchandises->id,
                    'name'=>$merchandises->name,
                    'int_category'=>$merchandises->int_category,
                    'quality'=>$merchandises->quality,
                    'description'=>$merchandises->description,
                    'material'=>$merchandises->material,
                    'price'=>$merchandises->price,
                    'discount'=>$merchandises->discount,
                    'images'=>$merchandises->images,
                    'quantity'=>1,
                ];
                

            }
            $request->session()->put('cart',$cart);
         
            
           }
        
       }
       return Inertia::render('Public/cart/Cart',['cart'=>$cart]);
       
        
    }

   
public function delete($id): RedirectResponse
{
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }
    // Redirect tới route 'cart.index' không yêu cầu id
    return redirect()->route('cart.index')->with('success', 'Sản phẩm đã xóa');
}
private function calculateTotalPrice(array $cart): float
    {
        $totalPrice = 0;

        foreach ($cart as $item) {
            $totalPrice += $item['quantity'] * $item['price']; // Sử dụng giá giảm giá
        }
        return $totalPrice;
    }
    }
