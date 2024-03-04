<?php

namespace Database\Factories;

use App\Models\Addresse;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reference'=>fake()->numerify('cmd-###-###'),
            'total_price'=>fake()->numberBetween(1, 1000),
            'delivery_date'=>fake()->date(),
            'shipping_date'=>fake()->date(),
            'ordering_date'=>fake()->date(),
            'total_weight'=>fake()->numberBetween(1, 1000),
            'delivery_fee'=>fake()->numberBetween(1, 10),
            'status'=>fake()->randomElement(['shipped', 'delivered', 'in preparation']),
            'addresse_id' => fake()->randomElement(Addresse::pluck('id')),
            'user_id' => fake()->randomElement(User::pluck('id'))
        ];
    }
}
