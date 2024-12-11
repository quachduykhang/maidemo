<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderdetailController;
use App\Models\Feedback;

Route::get('admin', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', function () {return inertia('Admin');})->name('admin');
});
//Hiển thị khách hàng
Route::get('/Admin/clients/index',[ClientController::class,'index'])->name('client.index');
Route::get('/Admin/clients/create',[ClientController::class,'create'])->name('client.create');
Route::post('/Admin/clients/create',[ClientController::class,'store'])->name('client.store');
Route::get('/Admin/clients/edit/{client}', [ClientController::class,'edit'])->name('client.edit');
Route::post('/Admin/clients/edit/{id}', [ClientController::class,'update'])->name('client.update');
Route::delete('/Admin/clients/index/{id}',[ClientController::class,'delete'])->name('client.delete');

//Hiển thị sản phẩm
Route::get('/Admin/merchandises/index',[MerchandiseController::class,'index'])->name('merchandise.index');
Route::get('/Admin/merchandises/create',[MerchandiseController::class,'create'])->name('merchandise.create');
Route::post('/Admin/merchandises/create',[MerchandiseController::class,'store'])->name('merchandise.store');
Route::get('/Admin/merchandises/edit/{merchandise}',[MerchandiseController::class,'edit'])->name('merchandise.edit');
Route::post('/Admin/merchandises/edit/{id}',[MerchandiseController::class,'update'])->name('merchandise.update');
Route::delete('/Admin/merchandises/index/{id}',[MerchandiseController::class,'delete'])->name('merchandise.delete');


 //Hiển thị admin
Route::get('/Admin/admin/index',[AdminController::class,'index'])->name('admin.index');
Route::get('/Admin/admins/create',[AdminController::class,'create'])->name('admin.create');
Route::post('/Admin/admins/create',[AdminController::class,'store'])->name('admin.store');
Route::get('/Admin/admins/edit/{admin}', [AdminController::class,'edit'])->name('admin.edit');
Route::post('/Admin/admins/edit/{id}', [AdminController::class,'update'])->name('admin.update');
Route::delete('/Admin/admins/index/{id}',[AdminController::class,'delete'])->name('admin.delete');

//Hiển thị Voucher
// Route::get('/Admin/voucher/index',[AdminController::class,'index'])->name('voucher.index');
// Route::get('/Admin/voucher/create',[AdminController::class,'create'])->name('voucher.create');
// Route::get('/Admin/voucher/edit',[AdminController::class,'edit'])->name('voucher.edit');

//Hiển thị order
Route::get('/Admin/order',[OrderController::class,'show'])->name('order.show');

// //Hiện thị danh mục sp
Route::get('/Admin/category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('/Admin/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/Admin/category/create',[CategoryController::class,'store'])->name('category.store');
Route::get('/Admin/category/edit/{category}', [CategoryController::class,'edit'])->name('category.edit');
Route::post('/Admin/category/edit/{id}', [CategoryController::class,'update'])->name('category.update');
Route::post('/Admin/category/index/{id}', [CategoryController::class,'delete'])->name('category.delete');

// // Hiển thị blog
Route::get('/Admin/blog/index',[BlogController::class,'index'])->name('blog.index');
Route::get('/Admin/blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('/Admin/blog/create',[BlogController::class,'store'])->name('blog.store');
Route::get('/Admin/blog/edit/{blog}', [BlogController::class,'edit'])->name('blog.edit');
Route::post('/Admin/blog/edit/{id}', [BlogController::class,'update'])->name('blog.update');
Route::post('/Admin/blog/index/{id}', [BlogController::class,'delete'])->name('blog.delete');
//Trang home
Route::get('/',[HomeController::class,'index'])->name('home.index');
//Trang sản phẩm
Route:: get('/Public/product/productpage', [MerchandiseController::class,'product'])->name('productpage');
Route::post('/Public/product/search', [MerchandiseController::class, 'search'])->name('searchProduct');
//trang danh muc

//Trang chi tiết sản phẩm
Route:: get('/Public/product/productdetail/{merchandise}', [MerchandiseController::class,'productdetail'])->name('productdetail');
//Trang tin tức
Route::get('/Public/blogpage',[BlogController::class,'blog'])->name('blog');
Route:: get('/Public/blog/blogdetail/{blog}',[BlogController::class,'blogdetail'])->name('blog.blogdetail');
//Trang login
Route:: get('/Public/login',[ClientController::class,'login'])->name('login_public');

Route:: get('/Public/sign',[ClientController::class,'sign'])->name('sign');
Route::post('/Public/sign',[ClientController::class,'register'])->name('register');
//Trang Gioi thieu
Route:: get('Public/introduce',[IntroduceController::class,'index'])->name('new');
//Trang liên hệ 
Route:: get('Public/feedback',[FeedbackController::class,'index'])->name('feedback');
Route::post('Public/feedback',[FeedbackController::class,'created'])->name('feedback.created');
//hiển thi đặt hàng
Route::get('/Admin/order/index',[OrderController::class,'admin'])->name('order.admin');
//hiển thi feedback
Route::get('/Admin/feedback',[FeedbackController::class,'admin'])->name('feedback.admin');
//Add to cart

Route::get('Public/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('Public/cart/Cart/{id}',[CartController::class,'view'])->name('cart');
Route::delete('Public/cart/Cart/{id}',[CartController::class,'delete'])->name('cart.delete');
//Thanh toán
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
//truy vấn sofa
Route::get('/Public/product/sofa', [MerchandiseController::class, 'sofa']);
//them vào order_detail
Route::post('/order-detail', [OrderdetailController::class, 'store'])->name('order_detail');

require __DIR__.'/auth.php';







