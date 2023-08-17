<?php

namespace Database\Factories;

use App\Models\UserAddress;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAddress>
 */
class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->unique(),

            'address_line_1' => $this->faker->streetAddress,
            'city' => $$this->faker->city,
            'post_code' => $this->faker->postcode(),
            'state' => $this->faker->state,
        ];
    }
}
