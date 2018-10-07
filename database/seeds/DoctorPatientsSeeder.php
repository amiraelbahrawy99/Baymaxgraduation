<?php

use Illuminate\Database\Seeder;

class DoctorPatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DoctorPatient::class, 20)->create();
    }
}
