<?php

use App\Entities\Attribute;
use App\Entities\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 20)->create()->each(function ($product) {
            Attribute::insert(
                [
                    'product_id'       => $product->id,
                    'color_id'         => 1,
                    'size_id'          => 2,
                    'quantity'         => 10,
                    'current_quantity' => 10,
                ],
                [
                    'product_id'       => $product->id,
                    'color_id'         => 1,
                    'size_id'          => 3,
                    'quantity'         => 10,
                    'current_quantity' => 10,
                ],
                [
                    'product_id'       => $product->id,
                    'color_id'         => 1,
                    'size_id'          => 4,
                    'quantity'         => 10,
                    'current_quantity' => 10,
                ],
                [
                    'product_id'       => $product->id,
                    'color_id'         => 1,
                    'size_id'          => 5,
                    'quantity'         => 10,
                    'current_quantity' => 10,
                ],
                [
                    'product_id'       => $product->id,
                    'color_id'         => 1,
                    'size_id'          => 1,
                    'quantity'         => 10,
                    'current_quantity' => 10,
                ],
            );
        });
    }
}
