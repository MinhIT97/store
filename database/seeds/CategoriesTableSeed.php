<?php

use App\Entities\Category;
use App\Supports\Traits\ProductSeederTrait;
use Illuminate\Database\Seeder;

class CategoriesTableSeed extends Seeder
{
    use ProductSeederTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        Category::create([
            'name'      => 'Men',
            'parent_id' => 1,
            'status'    => 1,
            'type'      => 'products',
        ])->each(function ($cate, $key) {
            $products = $this->seederProducts();
            $products->each(function ($product) use ($cate) {
                $product->attachCategories($cate->id);
                $product->sizes()->attach([1, 2, 3, 4]);
            });
        });
        Category::create([
            'name'      => 'Women',
            'parent_id' => 1,
            'status'    => 1,
            'type'      => 'products',
        ])->each(function ($cate, $key) {
            $products = $this->seederProducts();
            $products->each(function ($product) use ($cate) {
                $product->attachCategories($cate->id);
                $product->sizes()->attach([1, 2, 3, 4]);
            });
        });
        Category::create([
            'name'      => 'Accessories',
            'parent_id' => 1,
            'status'    => 1,
            'type'      => 'products',
        ])->each(function ($cate, $key) {
            $products = $this->seederProducts();
            $products->each(function ($product) use ($cate) {
                $product->attachCategories($cate->id);
                $product->sizes()->attach([1, 2, 3, 4]);
            });
        });
    }
}
