<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);

        $categories = [];
        if (Schema::hasTable('categories')) {
            $categories = Category::where('parent_id', '=', 0)->orderBy('name')->get();
        }
        View::share([
            'categories' => $categories, 
        ]);
    }
}
