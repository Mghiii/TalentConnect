<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
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
            'company_name' => $this->faker->company,
            'contact_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('12345678'), 
            'phone_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'domain' => $this->faker->randomElement(['Marketing', 'Programming', 'Design']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
