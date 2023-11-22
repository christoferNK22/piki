<?php

namespace Database\Seeders\CMS;

use App\Models\CMS\CmsManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmsManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsManagement::create([
            'name' => 'Joni',
            'dewan' => 'pengurus',
            'position' => 'ketua',
            'origin' => 'Sleman',
            'image' => 'path/to/image.jpg',
        ]);
    }
}
