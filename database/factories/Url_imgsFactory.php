<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url_imgs>
 */
class Url_imgsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'main_img'=>fake()->imageUrl(),
            'back_img'=>fake()->imageUrl(),
            'left_img'=>fake()->imageUrl(),
            'right_img'=>fake()->imageUrl(),
            'front_img'=>fake()->imageUrl(),

        ];
    }
}
