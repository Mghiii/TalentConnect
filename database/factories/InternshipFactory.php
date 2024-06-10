<?php

namespace Database\Factories;

use App\Models\Internship;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Internship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'certificate' => $this->faker->boolean,
            'comment' => $this->faker->randomElement(['Favorable', 'Unfavorable']),
            'offre_id' => $this->faker->numberBetween(1, 10),
            'company_id' => $this->faker->numberBetween(1, 10),
            'trainee_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

