<?php

use Faker\Generator as Faker;

$factory->define(App\Medicine::class, function (Faker $faker) {
    return [
                'user_id'=>$faker->numberBetween(\App\User::min('id'), \App\User::max('id')),
                'medicineName'=>$faker->text(30),
                'locationNum'=>$faker->numberBetween(1,6),
                //'durationInMonths'=>$faker->numberBetween(1,2),
                //'durationInWeeks'=>$faker->numberBetween(1,3),
                'durationInDays'=>$faker->numberBetween(1,29),
                'timesNum'=>$faker->numberBetween(1,4),
                'numOfDose'=>$faker->numberBetween(1,3),

    ];
});
