<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offre>
 */
class OffreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'offre_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'CV' => $this->faker->word() . '.pdf',
            'motivation_lettre' => $this->faker->word() . '.pdf',
            'status' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
            'trainee_id' => $this->faker->numberBetween(1, 10),
            'announce_id' => $this->faker->numberBetween(1, 10),
        ];

    }
}
