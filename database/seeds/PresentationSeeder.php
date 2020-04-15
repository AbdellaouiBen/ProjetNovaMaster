<?php

use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presentations')->insert([
            'titre' => 'simple et beau',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit nulla quod iure aperiam magnam totam veniam magni iusto illo vitae pariatur exercitationem numquam expedita laborum soluta eius, nobis velit explicabo minima odio id reprehenderit itaque! Ut, doloribus? ',
            'img' => 'imac.png',
        ]);    
    }
}
