<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announce>
 */
class AnnounceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'skills' => $this->faker->words(3, true),
            'benefits' => $this->faker->sentence(),
            'contact' => $this->faker->email(),
            'company_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
