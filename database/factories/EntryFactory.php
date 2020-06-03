<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entry;
use Faker\Generator as Faker;

$factory->define(Entry::class, function (Faker $faker) {
    return [
      'user_id' => 0,
      'mood' => $faker->word,
      'story' => $faker->realText
    ];
});
