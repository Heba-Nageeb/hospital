<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Clinic();
        $c->name ="Dentistery";
        $c->save();

        $c = new Clinic();
        $c->name ="Pediatrics";
        $c->save();

        $c = new Clinic();
        $c->name ="Cardiology";
        $c->save();
    }
}
