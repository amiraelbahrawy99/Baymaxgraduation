<?php

use Faker\Generator as Faker;

$factory->define(App\DoctorType::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->text(30),
    ];
});
