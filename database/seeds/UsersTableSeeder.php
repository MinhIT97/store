<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'        => 'admin@gmail.com',
            'name'         => 'Nguyen Van Minh',
            'password'     => Hash::make('lion123456'),
            'verify_token' => Str::random(32),
            'level'        => 1,
        ]);
        User::create([
            'email'        => 'minh06081997@gmail.com',
            'name'         => 'Nguyen Van Minh',
            'password'     => Hash::make('lion123456'),
            'verify_token' => Str::random(32),
            'level'        => 1,
        ]);
        User::create([
            'email'        => 'minh@gmail.com',
            'name'         => 'Nguyen Van Minh',
            'password'     => Hash::make('lion123456'),
            'verify_token' => Str::random(32),
            'level'        => 0,
        ]);
    }
}
