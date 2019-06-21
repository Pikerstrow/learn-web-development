<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Tutorial\Tutorial;
use App\Models\Tutorial\TutorialSection;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(TutorialSection::class, function (Faker $faker) {

    $title = implode(" ", $faker->words(mt_rand(2, 5)));

    return [
        'tutorial_id' => Tutorial::all()->random()->id,
        'title' => $title,
        'slug' => Str::slug($title),
        'description' => $faker->sentence,
    ];
});
