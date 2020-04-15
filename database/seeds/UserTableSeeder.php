<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ben',
            'email' => 'ben@bonjour.com',
            'password' => Hash::make('11'),
            'role_id' => 1,
        ]);    
        DB::table('users')->insert([
            'name' => 'albit',
            'email' => 'albin@lol.com',
            'password' => Hash::make('11'),
            'role_id' => 2,
        ]);    
    }
}
