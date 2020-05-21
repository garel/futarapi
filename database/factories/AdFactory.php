<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ad;
use Faker\Generator as Faker;

$factory->define(Ad::class, function (Faker $faker) {
    return [
        "name" => $faker->text(100),
        "description" => $faker->paragraphs(5,true),
        "payment" => $faker->numberBetween(500,10000)
    ];
});
