<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demo>
 */
class DemoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bbbb_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'email_address' => $this->faker->unique()->safeEmail(),
        ];
    }
}
