<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_client',
        'id_employee',
        'name',
        'address',
        'email',
        'status',
        
    ];

       public function details()
    {
        return $this->hasMany(Order_detail::class);
    }
}
