<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icon' => 'responsive.svg',
            'titre' => 'TRES RESPONSIVE ',
            'description' => 'Looks amazing on any device: smartphone, tablet, laptop and desktop.',
        ]);        
        DB::table('services')->insert([
            'icon' => 'customisable.svg',
            'titre' => 'CUSTOMIZABLE ',
            'description' => 'Change the colors, pictures or any of the sections to suit your needs.',
        ]);        
        DB::table('services')->insert([
            'icon' => 'design.svg',
            'titre' => 'BEAUX DESIGN ',
            'description' => 'Trendy and fresh design, fits any website.',
        ]);        
    }
}
