<?php

namespace Database\Seeders\CMS;

use App\Models\CMS\CmsContactInformation;
use Illuminate\Database\Seeder;

class CmsContactInformationSeeder extends Seeder
{
    public function run(): void
    {
        CmsContactInformation::create([
            'email' => 'pikisleman@gmail.com',
            'instagram_url' => 'https://www.instagram.com/piki_sleman/',
        ]);
    }
}
