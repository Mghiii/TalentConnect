<?php

namespace Database\Seeders;

use App\Models\Internship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Internship::factory()->count(10)->create();
    }
}
