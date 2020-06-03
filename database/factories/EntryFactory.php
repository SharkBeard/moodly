<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\entry;
use Faker\Generator as Faker;

$factory->define(entry::class, function (Faker $faker) {
    return [
      'mood' => $faker->word,
      'story' => $faker->realText
    ];
});
