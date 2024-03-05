<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductOption;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'starting_date' =>fake()->dateTime,
            'end_date' =>fake()->dateTime,
            'value' =>fake()->randomElement(['10','20','30','40','50','60','70']),
            'product_id' =>fake()->randomElement(ProductOption::pluck('id')->toArray())
        ];
    }
}
