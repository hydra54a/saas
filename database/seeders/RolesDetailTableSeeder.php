<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rolesDetail')->insert([
            'role_id' => 1,
            'name' => 'Manage Users',
            'description' => 'Can manage user accounts and permissions.',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
