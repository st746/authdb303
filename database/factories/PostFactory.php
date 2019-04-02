<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [


        'user_id' => 1,
        'title' => $faker->sentence(10),
        'body' => $faker->sentence(30),


        //
    ];
});