<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\User;
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
        $this->call([
            ClinicSeeder::class,
        ]);
        // \App\Models\Clinic::factory(10)->create();
        User::factory(10)->create();
        Doctor::factory(10)->create();
        Reservation::factory(10)->create();
    }
}
