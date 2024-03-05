<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductOption>
 */
class ProductOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => fake()->uuid(),
            'vat_id' => fake()->uuid(),
            'promotion_id' => fake()->uuid(),
            'url_img_id' => fake()->uuid(),
            'option'=>fake()->word(),
            'price_ht'=>fake()->randomFloat(2, 0, 100),
            'price_ttc'=>fake()->randomFloat(2, 0, 100),
            'price_vat'=>fake()->randomFloat(2, 0, 100),
            'weight'=>fake()->randomFloat(2, 0, 100),
            'stock'=>fake()->randomNumber(1)
        ];
    }
}
