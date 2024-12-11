<?php

namespace App\Helper;

use App\Models\CartItem;
use App\Models\Merchandise;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class Cart
{
    public static function getCartItems()
    {
        if ($user = Auth::user()) {
            return CartItem::whereUserId($user->id)->get()->map(function (CartItem $item) {
                return ['id' => $item->id, 'quantity' => $item->quantity];
            })->toArray();
        } else {
            return self::getCookieCartItems();
        }
    }

    public static function getCookieCartItems()
    {
        return json_decode(request()->cookie('cart_items', '[]'), true);
    }

    public static function setCookieCartItems($cartItems)
    {
        $jsonCartItems = json_encode($cartItems);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Lỗi mã hóa JSON: ' . json_last_error_msg());
        }

        Cookie::queue('cart_items', $jsonCartItems, 60 * 24 * 30);
    }

    public static function saveCartItemsToDatabase()
    {
        $user = Auth::user();
        $userCartItems = CartItem::where('user_id', $user->id)->get()->keyBy('id');
        $savedCartItems = [];

        foreach (self::getCookieCartItems() as $cartItem) {
            if (isset($userCartItems[$cartItem['id']])) {
                $userCartItems[$cartItem['id']]->update(['quantity' => $cartItem['quantity']]);
            } else {
                $savedCartItems[] = [
                    'user_id' => $user->id,
                    'id' => $cartItem['id'],
                    'quantity' => $cartItem['quantity'],
                ];
            }
        }

        if (!empty($savedCartItems)) {
            CartItem::insert($savedCartItems);
        }
    }

    public static function moveCartItemsIntoDatabase()
    {
        $user = Auth::user();
        $cartItems = self::getCookieCartItems();
        $newCartItems = [];

        foreach ($cartItems as $cartItem) {
            $existingCartItem = CartItem::where([
                'user_id' => $user->id,
                'id' => $cartItem['id'],
            ])->first();

            if (!$existingCartItem) {
                $newCartItems[] = [
                    'user_id' => $user->id,
                    'id' => $cartItem['id'],
                    'quantity' => $cartItem['quantity'],
                ];
            }
        }

        if (!empty($newCartItems)) {
            CartItem::insert($newCartItems);
        }
    }

    public static function getProductsAndCartItems()
    {
        $cartItems = self::getCartItems();
        $ids = array_column($cartItems, 'id');
        $products = Merchandise::whereIn('id', $ids)->with('images')->get();
        $cartItems = array_combine(array_column($cartItems, 'id'), $cartItems);

        return [$products, $cartItems];
    }
}
