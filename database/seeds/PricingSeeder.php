<?php

use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            'type' => 'BASIC',
            'prix' => '15',
            'avantageUn' => 'Up to 7 Projects',
            'avantageDeux' => '2 Additional Developers',
        ]);    
        DB::table('pricings')->insert([
            'type' => 'AGENCY',
            'prix' => '55',
            'avantageUn' => 'Up to 25 Projects',
            'avantageDeux' => '2 Additional Developers',
            'avantageTrois' => 'Unlimited Support',
        ]);    
    }
}
