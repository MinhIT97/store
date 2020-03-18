<?php

use App\Entities\Category;
use App\Supports\Traits\ProductSeederTrait;
use Illuminate\Database\Seeder;

class CategoriesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    protected function run()
    {
        factory(Category::class, 6)->create();
    }
}
