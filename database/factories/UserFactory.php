<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $randomFlag = $faker->boolean();
    return [
        'FUser_name' => $faker->firstName,
        'LUser_name' => $faker->lastName,
        'User_Email' => $faker->unique()->safeEmail,
        'User_Mobile' => $faker->phoneNumber,
        'User_Password' =>$faker->numberBetween(123456,1234567),
        //'User_Password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'User_Age' => $faker->numberBetween(40, 80),
        'User_Address' => $faker->streetAddress,
        'is_doctor' => $randomFlag,
        'doctor_type_id' => $randomFlag ? random_int(
            \App\DoctorType::min('id'),
            \App\DoctorType::max('id')) : null,
    'remember_token' => str_random(10),
    ];
});
