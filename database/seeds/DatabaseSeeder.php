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
        $this->call(RoleSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PresentationSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PricingSeeder::class);
        $this->call(TeamSeeder::class);
    }
}
