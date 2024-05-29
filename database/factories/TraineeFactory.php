<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainee>
 */
class TraineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('12345678'), 
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'role' => null,
            'domain' => $this->faker->randomElement(['Marketing', 'Programming', 'Design']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
