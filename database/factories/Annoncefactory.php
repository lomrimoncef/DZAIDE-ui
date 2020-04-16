<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Annonce;
use Faker\Generator as Faker;

$factory->define(Annonce::class, function (Faker $faker) {
    return [
        'titre'=> $faker->sentence(5), 
        'details'=> $faker->text, 
        'date_annonce' => $faker->date, 
        'date_publication' => $faker->date, 
        'publier' => '1',
        'catannonce_id' => rand(1,10),
        'urgence_id' => rand(2,5),
        'user_id' => factory(App\User::class),
    ];
});
