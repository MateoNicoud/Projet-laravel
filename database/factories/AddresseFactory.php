<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addresse>
 */
class AddresseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'zip_code' => fake()->randomNumber(5),
            'city' => fake()->city(),
            'country' => fake()->country(),
            'phone_delivery' => fake()->phoneNumber(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'address_delivery' => fake()->address(),
            'user_id' => fake()->randomElement(User::pluck('id'))
        ];
    }
}
