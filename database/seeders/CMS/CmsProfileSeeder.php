<?php

namespace Database\Seeders\CMS;

use App\Models\CMS\CmsProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmsProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsProfile::create([
            'sejarah' => 'Persatuan Intelegensia Kristen Indonesia disingkat 
            PIKI adalah Organisasi Kemasyarakatan bagi Intelegensi Kristen di 
            Indonesia yang didirikan di Jakarta tanggal 19 Desember 1963, yang mengaku 
            Yesus Kristus adalah Tuhan dan Juru Selamat Dunia sesuai dengan kesaksian 
            Alkitab dan berasaskan Pancasila sebagai satu-satunya asas dalam kehidupan 
            bermasyarakat berbangsa dan bernegara.',

            'foundation' => 'Di dalam perisai terdapat gambar SALIB, 
            CAWAN dengan kaki dian dan LIDAH API berjumlah 19 buah:

            - SALIB “melambangkan identitas Kristiani yang sekaligus menjadi nafas perjuangan PIKI 
            dalam partisipasinya di semua bidang pelayanannya”
            - CAWAN dengan kaki dian “melambangkan medan pergumulan Inteligensia Kristen berupa 
            masalah-masalah sosial, masalah-masalah Kegerejaan dan masalah-masalah Negara”
            - LIDAH API dengan jumlah 19 buah yang menandakan hari kelahiran PIKI pada 19 Desember 
            melambangkan fungsi Inteligensia Kristen yang sekaligus adalah panggilannya untuk 
            menyinar-pencari seluruh persoalan, permasalahan dan tantangan di medan pelayanannya 
            atas dasar Sinar KASIH Yesus Kristus',
        ]);
    }
}
