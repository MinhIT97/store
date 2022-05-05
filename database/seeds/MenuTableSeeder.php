<?php

use App\Entities\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            [
                'label'     => 'Men',
                'link'      => '/products/men',
                'parent_id' => 0,
            ],
            [
                'label'     => 'Women',
                'link'      => '/products/women',
                'parent_id' => 0,
            ],
            [
                'label'     => 'Accessories',
                'link'      => '/products/accessories',
                'parent_id' => 0,
            ],
            [
                'label'     => 'News',
                'link'      => '/blogs',
                'parent_id' => 0,
            ],
        ]);
    }
}
