<?php

namespace Database\Seeders\CMS;

use App\Models\CMS\CmsNews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmsNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsNews::create([
            'title' => 'Prestasi Terbaru',
            'content' => 'Organisasi kami meraih prestasi di ajang nasional.',
            'image_news' => 'path/to/photo.jpg',
        ]);
    }
}
