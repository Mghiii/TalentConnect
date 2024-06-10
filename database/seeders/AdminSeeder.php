<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Admin555'),
            'role' => 'admin',
            'userable_id' => 1,
            'userable_type' => 'App\Models\Role',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
