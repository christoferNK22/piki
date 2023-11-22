<?php

namespace Database\Seeders\CMS;

use App\Models\CMS\CmsVisiMisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmsVisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsVisiMisi::create([
            'visi1' => 'Mengadakan Penelaahan Alkitab dan kegiatan-kegiatan keimanan lainnya',
            'visi2' => 'Menjadikan Alkitab sebagai prinsip dasar dalam berpikir dan bertindak',
            'visi3' => 'Menghimpun dan membina potensi anggota untuk mengembangkan 
            ilmu pengetahuan dan teknologi secara bertanggung jawab',
            'visi4' => 'Mengadakan pengkajian-pengkajian ilmiah serta usaha-usaha yang dapat 
            disumbangkan bagi pembangunan gereja, masyarakat dan perguruan tinggi',
            'visi5' => 'Mengadakan kerjasama dengan gereja-gereja, organisasi kemasyarakatan 
            serta lembaga-lembaga pemerintah maupun swasta dengan memperkokoh persekutuan dalam 
            rangka usaha-usaha kesaksian dan pelayanan',
        ]);
    }
}
