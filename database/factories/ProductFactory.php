<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpOption\Option;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => fake()->name(),
            'description' => fake()->text(200),
            'reference' => fake()->text(50),
            'slug' => fake()->slug,
            'brand' => fake()->company(),
            'category_id' =>fake()->randomElement(Category::pluck('id'))
        ];
    }
}
