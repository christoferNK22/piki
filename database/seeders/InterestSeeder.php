<?php

namespace Database\Seeders;

use App\Models\Interest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $bidangs = [
        //     "Bidang Pendidikan Organisasi P3A",
        //     "Bidang Politik Hukum dan Ham"
        // ];

        // foreach ($bidangs as $bidang) {
        //     Interest::create([
        //         'code' => $this->generateAbbreviation($bidang),
        //         'name' => $bidang
        //     ]);
        // }
    }

    private function  generateAbbreviation($input)
    {
        $words = explode(' ', $input);
        $abbreviation = '';

        foreach ($words as $word) {
            if (!empty($word)) {
                $abbreviation .= strtoupper(substr($word, 0, 1));
            }
        }

        return $abbreviation;
    }
}
