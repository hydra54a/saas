<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('userProfile')->insert([
            'user_id' => 1,
            'firstName' => 'John',
            'middleName' => 'Doe',
            'lastName' => 'Smith',
            'email' => 'john@example.com',
            'mobileNumber' => '1234567890',
            'bdate' => '1990-01-01',
            'gender' => 'M',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
