<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'othername' => $this->faker->city(),
            'gender_id' => rand(1,3),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile' => $this->faker->randomNumber(6, true),
            'othername' => $this->faker->name(),
            'address' => $this->faker->words(4, true),
            'description' => $this->faker->sentence(),
        ];
    }
}
