<?php

use App\Entities\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ColorTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeed::class);
        // $this->call(ProductsTableSeeder::class);

        $this->call(MenuTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
		$this->call(DistrictTableSeeder::class);
        // $this->call(CategoriesTableSeed::class);

    }
}
