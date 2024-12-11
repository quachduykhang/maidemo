<?php

namespace App\Http\Resources;

use App\Helper\Cart;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Product; // Thêm 'use' cho Product
use Illuminate\Support\Arr;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        [$products, $cartItems] = $this->resource;

        $total = $products->reduce(function (?float $carry, Merchandise $product) use ($cartItems) {
            return $carry + ($product->price * Arr::get($cartItems, $product->id . '.quantity', 0));
        }, 0);

        return [
            'count' => Cart::getCount(),
            'total' => $total,
            'items' => $cartItems,
            'products' => ProductResource::collection($products), // Sửa thành 'collection'
        ];
    }
}
