<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrower>
 */
class BorrowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected static $teams = [
        'Team A', 'Team B', 'Team C', 'Team D', 'Team E',
    ];
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'date_of_birth' => $this->faker->date,
            'msg' => $this->faker->sentence,
            'teams' => $this->faker->randomElement(static::$teams),
        ];
    }
}
