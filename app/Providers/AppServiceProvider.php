<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Merchandise;
use App\Models\Users;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::model('client',Client::class);
        Route::model('merchandise',Merchandise::class);
        Route::model('admin',Users::class);
        Route::model('blog',Blog::class);
        Route::model('category',Category::class);
        Route::model('feedbacks',Feedback::class);
    }
}
