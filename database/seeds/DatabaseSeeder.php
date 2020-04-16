<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = \Faker\Factory::create();

        foreach (range(1,1000) as $index) {php
            DB::table('activites')->insert([
                'titre_activite' => $faker->name,
                'details' => $faker->email,
                'valider_par' => $faker->name,
            ]);}*/

        //$this->call([UrgencesTableSeeder::class,catannoncesTableSeeder::class]);

    }
}
