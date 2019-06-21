<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Tutorial\Rating;
use App\Models\Tutorial\Tutorial;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'rating' => $faker->randomFloat(1, 4, 5),
        'votes' => $faker->randomNumber(3)
    ];
});
