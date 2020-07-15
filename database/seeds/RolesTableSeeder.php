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
                'name'  => 'Admin',
                'slug'  => 'admin',
                'staus' => 1,
            ],
            [
                'name'  => 'superadmin',
                'slug'  => 'superadmin',
                'staus' => 1,
            ],
        ];

        foreach ($data as $item) {
            $role        = new Role;
            $role->name  = $item['name'];
            $role->slug  = $item['slug'];
            $role->staus = $item['staus'];
            $role->save();
        }
    }
}
