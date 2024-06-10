<?php

namespace Database\Seeders;

use App\Models\Trainee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TraineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainee::factory()->count(10)->create();

        // $user = User::create([
        //     'name' => 'User Name',
        //     'email' => 'user@example.com',
        //     'password' => Hash::make('password'), // Hash the password
        //     'userable_id' => $company->id,
        //     'userable_type' => Company::class,
        // ]);
    }
}
