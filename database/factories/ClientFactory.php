<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'Street' => $this->faker->streetAddress,
            'apartment' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'State' => $this->faker->state,
            'zip_code' => $this->faker->postcode,
            'status' => $this->faker->randomElement([1, 0]),
        ];
    }
}
