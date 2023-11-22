<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Member;
use Database\Seeders\CMS\CmsContactInformationSeeder;
use Database\Seeders\CMS\CmsAgendaSeeder;
use Database\Seeders\CMS\CmsManagementSeeder;
use Database\Seeders\CMS\CmsNewsSeeder;
use Database\Seeders\CMS\CmsProfileSeeder;
use Database\Seeders\CMS\CmsVisiMisiSeeder;
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
                UserSeeder::class,
                EducationSeeder::class,
                InterestSeeder::class,
                ChurchSeeder::class,
                MemberSeeder::class,
                CmsAgendaSeeder::class,
                CmsContactInformationSeeder::class,
                CmsVisiMisiSeeder::class,
                CmsManagementSeeder::class,
                CmsNewsSeeder::class,
                CmsProfileSeeder::class
            ]
        );
    }
}
