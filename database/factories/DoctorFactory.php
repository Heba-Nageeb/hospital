<?php

namespace Database\Factories;

use App\Models\Clinic;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "phone" => $this->faker->phoneNumber(),
            "ex_fees" => $this->faker->randomFloat(2, 10,600),
            "clinic_id" => $this->faker->randomElement(Clinic::pluck("id")->toArray()),
            "shift" => $this->faker->randomElement(["morning" ,"evening"]),
            "title" => $this->faker->randomElement(["professor" ,"consultant","specialist"]),
            "comment" => $this->faker->sentence(10)
        ];
    }
}
