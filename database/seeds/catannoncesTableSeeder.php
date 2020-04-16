<?php

use Illuminate\Database\Seeder;

class catannoncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catannonces')->insert([
            ['categorie'=>'santé'],
            ['categorie'=>'dons de sang'],
            ['categorie'=>'médicaments'],
            ['categorie'=>'dons'],
            ['categorie'=>'prêts'],
            ['categorie'=>'bricolage'],
            ['categorie'=>'jardinage'],
            ['categorie'=>'administration'],
            ['categorie'=>'informatique'],
            ['categorie'=>'transport'],
            ['categorie'=>'déménagement'],
            ['categorie'=>'cours'],
            ['categorie'=>'coaching'],
        
        ]);
    }
}
