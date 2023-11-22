<?php

namespace Database\Seeders\CMS;

use App\Models\CMS\CmsAgenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmsAgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsAgenda::create([
            'activity' => 'Rapat Bulanan',
            'date' => now(),
            'start_date' => now(),
            'finish_date' => now()->addHours(2),
            'title' => 'Rapat Bulanan Organisasi',
            'note' => 'Agenda ini untuk membahas proyek-proyek terkini.',
        ]);
    }
}
