<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order_line>
 */
class OrderLineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => fake()->randomElement(Order::pluck('id')),
            'option'=>fake()->word(),
            'brand'=>fake()->word(),
            'description'=>fake()->sentence(),
            'main_img'=>fake()->imageUrl(),
            'price_ht'=>fake()->randomFloat(1, 20, 30),
            'price_ttc'=>fake()->randomFloat(1,20,30),
            'price_vat'=>fake()->randomFloat(1,20,30),
            'weight'=>fake()->randomFloat(1,0,100),
            'reference'=>fake()->randomNumber(),
            'value_promotion'=>fake()->numberBetween(0,100),
            'quantity'=>fake()->randomDigitNotNull(),
            'vat'=>fake()->randomElement([20, 10, 5.5, 2.1])
        ];
    }
}
