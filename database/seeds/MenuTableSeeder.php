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
                'label'     => 'Nam',
                'link'      => '/products/men',
                'parent_id' => 0,
            ],
            [
                'label'     => 'Nữ',
                'link'      => '/products/women',
                'parent_id' => 0,
            ],
            [
                'label'     => 'Phụ kiện',
                'link'      => '/products/accessories',
                'parent_id' => 0,
            ],
            [
                'label'     => 'blog',
                'link'      => '/blogs',
                'parent_id' => 0,
            ],
        ]);
    }
}
