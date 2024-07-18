<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,            
            UserProfileTableSeeder::class,         
            RoleTableSeeder::class,
            RolesDetailTableSeeder::class,
            UserRolesTableSeeder::class,
            UsersRolesAccessLimitTableSeeder::class,
            UsersCredentialsTableSeeder::class,
        ]);
    }
}
