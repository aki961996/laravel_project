<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'todo' . $this->faker->numberBetween(1, 3) . '.jpg',
            'team_member' => $this->faker->name,
            'task' => $this->faker->sentence,
            'priority' => $this->faker->randomElement(['high priority', 'low priority']), // 70% chance of high priority
           
        ];
    }
}
