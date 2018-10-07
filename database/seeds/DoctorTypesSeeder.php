<?php

use Illuminate\Database\Seeder;

class DoctorTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DoctorType::class, 10)->create();
    }
}
