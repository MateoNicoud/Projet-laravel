<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content'=>fake()->text(),
            'score'=>fake()->numberBetween(1,5),
            'created_at'=>fake()->date(),
//            'updated_at'=>date_create(),
            'user_id' =>fake()->randomElement(User::pluck('id')),
            'product_id' =>fake()->randomElement(Product::pluck('id')),

        ];
    }
}
