<?php

namespace Database\Seeders;

use App\Models\Offre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Offre::factory()->count(10)->create();
    }
}
