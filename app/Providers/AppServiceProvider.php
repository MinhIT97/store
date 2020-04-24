<?php

namespace App\Providers;

use App\Entities\Attribute;
use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Product;
use App\Entities\Size;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'posts'      => Post::class,
            'products'   => Product::class,
            'categories' => Category::class,
            'sizes'      => Size::class,
            'attribute'  => Attribute::class,
        ]);
        Schema::defaultStringLength(191);
    }
}
