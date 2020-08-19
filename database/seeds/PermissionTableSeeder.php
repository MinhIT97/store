<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    }

    private function permissions()
    {
        return [
            // User
            [
                'name'  => 'View User',
                'slug'  => 'view.user',
                'model' => User::class,
            ],
            [
                'name'  => 'Create User',
                'slug'  => 'create.user',
                'model' => User::class,
            ],
            [
                'name'  => 'Update User',
                'slug'  => 'update.user',
                'model' => User::class,
            ],
            [
                'name'  => 'Delete User',
                'slug'  => 'delete.user',
                'model' => User::class,
            ],

            // Role
            [
                'name'  => 'View Role',
                'slug'  => 'view.role',
                'model' => Role::class,
            ],
            [
                'name'  => 'Create Role',
                'slug'  => 'create.role',
                'model' => Role::class,
            ],
            [
                'name'  => 'Update Role',
                'slug'  => 'update.role',
                'model' => Role::class,
            ],
            [
                'name'  => 'Delete Role',
                'slug'  => 'delete.role',
                'model' => Role::class,
            ],
            //blog
            [
                'name'  => 'View Blog',
                'slug'  => 'view.blog',
                'model' => Role::class,
            ],
            [
                'name'  => 'Create Blog',
                'slug'  => 'create.blog',
                'model' => Role::class,
            ],
            [
                'name'  => 'Update Blog',
                'slug'  => 'update.blog',
                'model' => Role::class,
            ],
            [
                'name'  => 'Delete Blog',
                'slug'  => 'delete.blog',
                'model' => Role::class,
            ],
        ];
    }
}
