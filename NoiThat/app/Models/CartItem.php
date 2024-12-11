<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['user_id', 'id', 'quantity']; // Đảm bảo các trường fillable tương thích

    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class, 'id', 'id');
    }
}
