<?php

use App\Entities\Color;
use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::insert([

            [
                'color' => 'green',
                'slug'  => 'green',
            ],
            [
                'color' => 'red',
                'slug'  => 'red',
            ],
            [
                'color' => 'black',
                'slug'  => 'black',
            ],
            [
                'color' => 'white',
                'slug'  => 'white',
            ],
            [
                'color' => 'violet',
                'slug'  => 'violet',
            ],
            [
                'color' => 'yellow',
                'slug'  => 'yellow',
            ],
            [
                'color' => 'brown',
                'slug'  => 'brown',
            ],

        ]);
    }
}
