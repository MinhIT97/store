<?php

use App\Entities\Size;
use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::insert([
            [
                'size' => 'XS',
            ],
            [
                'size' => 'S',
            ],
            [
                'size' => 'M',
            ],
            [
                'size' => 'L',
            ],
            [
                'size' => 'XL',
            ],
            [
                'size' => '36',
            ],
            [
                'size' => '37',
            ],
            [
                'size' => '38',
            ],
            [
                'size' => '39',
            ],
            [
                'size' => '40',
            ],
            [
                'size' => '41',
            ],
            [
                'size' => '42',
            ],
            [
                'size' => '43',
            ],
        ]);
    }
}
