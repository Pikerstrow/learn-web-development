<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Tutorial\Rating;
use App\Models\Tutorial\Tutorial;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Tutorial::class, function (Faker $faker) {
    $tutorials         = ['HTML 5', 'CSS 3', 'JavaScript', 'PHP'];
    $headerBackgrounds = [
        "linear-gradient(to top, #b73e3e, #b23b3b, #ae3837, #a93434, #a53131)",
        "linear-gradient(to right top, #006eba, #0078c2, #0083ca, #008dd2, #0098d9)",
        "linear-gradient(to right top, #f0c837, #f4cc2f, #f8d026, #fbd419, #ffd800)",
        "linear-gradient(to bottom, #777bb7, #7276b5, #6d71b2, #676cb0, #6267ad)"
    ];
    $iconsClasses      = ['fa-10x fab fa-html5', 'fa-10x fab fa-css3-alt', 'fa-7x fab fa-js', 'fa-7x fab fa-php'];
    $iconsColors       = ['#e02e00', '#006eba', '#f1d63b', '#777bb3'];
    $descriptions      = [
        0 => "HTML is the very first technology, that everyone who wants to learn web development should " .
             " know. This tutorial is made for beginners who want to start learning web development from the " .
             "scratch!",
        1 => "CSS is the second of the two core technologies for building web pages and describes how html " .
             "elements should be displayed on screens. This tutorial is well suited for those who are just finished " .
             "learn html and is about to start learning css!",
        2 => "JavaScript is one of the most popular today's programming language which is widely used in " .
             "web development. This tutorial is made for beginners who has no experience in programming but want to start " .
             "learn JavaScript.",
        3 => "PHP is a general-purpose programming language which was designed and widely used in " .
             "'server-side' web development. This tutorial will introduce you with PHP and teach how to build web pages dynamically!"
    ];

    $tutorialTitle = $faker->unique()->randomElement($tutorials);


    return [
        'type' => 'text',
        'title' => $tutorialTitle,
        'slug' => Str::slug($tutorialTitle),
        'description' => $descriptions[array_search($tutorialTitle, $tutorials)],
        'header_background_color' => $headerBackgrounds[array_search($tutorialTitle, $tutorials)],
        'header_icon_class' => $iconsClasses[array_search($tutorialTitle, $tutorials)],
        'header_icon_color' => $iconsColors[array_search($tutorialTitle, $tutorials)],
    ];
});
