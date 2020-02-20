<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SeveritiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(EquipmentSeeder::class);
    }
}
