<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pressure' => $this->faker->randomNumber(1,200),
            'translation' => $this->faker->sentence(),
            'patient_id' => rand(1,20000),
        ];
    }
}
