<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "user_id" => $this->faker->randomElement(User::pluck("id")->toArray()),
            "doctor_id" => $this->faker->randomElement(Doctor::pluck("id")->toArray()),
            "comment" => $this->faker->sentence(10)
        ];
    }
}
