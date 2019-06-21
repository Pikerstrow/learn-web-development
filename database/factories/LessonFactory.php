<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Tutorial\Lesson;
use App\Models\Tutorial\TutorialSection;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Lesson::class, function (Faker $faker) {
    $title = implode(" ", $faker->words(mt_rand(2, 5)));
    return [
        'tutorial_section_id' => TutorialSection::all()->random()->id,
        'title' => $title,
        'slug' => Str::slug($title),
        'body' => implode("\n<br>", $faker->paragraphs(mt_rand(5, 10))),
    ];
});
