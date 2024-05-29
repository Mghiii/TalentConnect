<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = Company::factory(10)->create();

        foreach ($companies as $company) {
            User::create([
                'name' => 'User Name',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'userable_id' => $company->id,
                'userable_type' => Company::class,
            ]);
        }
    }
}
