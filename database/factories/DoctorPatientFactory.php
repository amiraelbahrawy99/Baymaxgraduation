<?php

use Faker\Generator as Faker;

$factory->define(App\DoctorPatient::class, function (Faker $faker) {
    $doctors = \App\User::where('is_doctor', '=', true)->pluck('id')->toArray();
    $patients = \App\User::where('is_doctor', '=', false)->pluck('id')->toArray();
    return [
        'doctor_id' => $doctors[array_rand($doctors)],
        'patient_id' => $patients[array_rand($patients)],
    ];
});
