<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    // Đảm bảo tên bảng đúng
    protected $table = 'merchandises'; 

    // Các thuộc tính có thể được fill
    protected $fillable = [
        'int_category',
        'name',
        'quality',
        'description',
        'material',
        'price',
        'discount',
        'images',
    ];

    // Kiểm tra SlugOptions nếu cần, nếu không sử dụng có thể xóa hoặc comment
    // public function getSlugOptions() : SlugOptions
    // {
    //     return SlugOptions::create()
    //         ->generateSlugsFrom('name') // Đảm bảo tên trường đúng, như 'name' hoặc 'title'
    //         ->saveSlugTo('slug');
    // }

    // Phương thức liên kết tới bảng Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'int_category'); // Đảm bảo tên cột và lớp đúng
    }

    // Phương thức liên kết tới bảng CartItem
    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'product_id'); // Đảm bảo tên cột và lớp đúng
    }

    // Nếu có nhiều ảnh, hãy bỏ comment phần này và kiểm tra lớp ProductImage
    // public function productImages()
    // {
    //     return $this->hasMany(ProductImage::class, 'merchandise_id'); // Đảm bảo tên cột và lớp đúng
    // }
}
