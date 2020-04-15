<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'img' => 'ceo.png',
            'job' => 'CEO ',
            'full_name' => 'Johnny B Good ',
            'description' => 'The one that puts it all together.',
        ]);  
        DB::table('teams')->insert([
            'img' => 'cfo.png',
            'job' => 'DEV ',
            'full_name' => 'Chuck Berry',
            'description' => 'The brains behind the whole operation',
        ]);  
        DB::table('teams')->insert([
            'img' => 'cto.png',
            'job' => 'DEV ',
            'full_name' => 'Chuck Berry',
            'description' => 'The brains behind the whole operation',
        ]);  
    }
}
