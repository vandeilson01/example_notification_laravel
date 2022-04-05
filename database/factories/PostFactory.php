<?php

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'user_id' => 1,
        'title' => $faker->unique()->word,
        'body' => $faker->sentence()
    ];
});
