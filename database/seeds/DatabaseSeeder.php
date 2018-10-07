<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DoctorTypesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MedicineSeeder::class);
        $this->call(DoctorPatientsSeeder::class);

        // $this->call(UsersTableSeeder::class);
    }
}
