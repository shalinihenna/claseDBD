<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proveedore;
use Faker\Generator as Faker;

$factory->define(Proveedore::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'telefono' => $faker->numberBetween($min=50, $max=200),
    ];
});
