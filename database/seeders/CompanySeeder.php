<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
        'company_name' => 'sparky',
        'contact_name' => 'taha',
        'email' => 'sparky@gmail.com',
        'password' => 'Sp4rky11',
        'phone_number' => 1234567890,
        'username' => 'sparky',
        'address' => 'hfjkdshkjds',
        'domain' =>'Design',
        ]);

    }
}
