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
        Color::create([
            [
                'color' => 'green',
            ],
            [
                'color' => 'red',
            ],
            [
                'color' => 'black',
            ],
            [
                'color' => 'white',
            ],
            [
                'color' => 'violet',
            ],
            [
                'color' => 'yellow',
            ],
            [
                'color' => 'brown',
            ]
        ]);
    }
}
