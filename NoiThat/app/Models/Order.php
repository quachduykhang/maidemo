<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'email', 'total'];

    public function details()
    {
        return $this->hasMany(Order_detail::class);
    }
}
