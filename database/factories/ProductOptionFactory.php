<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\UrlImg;
use App\Models\Vat;
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
            'product_id' => fake()->randomElement(Product::pluck('id')),
            'vat_id' => fake()->randomElement(Vat::pluck('id')),
            'url_img_id' => fake()->randomElement(UrlImg::pluck('id')),
            'option'=>fake()->word(),
            'price_ht'=>fake()->randomFloat(2, 0, 100),
            'price_ttc'=>fake()->randomFloat(2, 0, 100),
            'price_vat'=>fake()->randomFloat(2, 0, 100),
            'weight'=>fake()->randomFloat(2, 0, 100),
            'stock'=>fake()->randomNumber(1)
        ];
    }
}
