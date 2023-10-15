<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Member;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                // UserSeeder::class,
                // EducationSeeder::class,
                // InterestSeeder::class,
                ChurchSeeder::class,
                MemberSeeder::class
            ]
        );
    }
}
