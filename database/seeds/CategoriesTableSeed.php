<?php

use App\Entities\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeed extends Seeder
{
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
        ]);
        Category::create([
            'name'      => 'Women',
            'parent_id' => 1,
            'status'    => 1,
        ]);
        Category::create([
            'name'      => 'Accessories',
            'parent_id' => 1,
            'status'    => 1,
        ]);
    }
}
