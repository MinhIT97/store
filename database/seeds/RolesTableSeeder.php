<?php

use App\Entities\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'        => 'Admin',
                'slug'        => 'admin',
                'description' => 'admin',
            ],
            [
                'name'        => 'superadmin',
                'slug'        => 'superadmin',
                'description' => 'superadmin',
            ],
        ];

        foreach ($data as $item) {
            $role       = new Role;
            $role->name = $item['name'];
            $role->slug = $item['slug'];
            $role->description = $item['description'];
            $role->save();
        }
    }
}
