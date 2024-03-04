<?php

namespace Database\Factories;

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
            'value' =>fake()->randomElement(['10','20','30','40','50','60','70'])
            //
        ];
    }
}
