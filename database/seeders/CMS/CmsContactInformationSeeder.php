<?php

namespace Database\Seeders\CMS;

use App\Models\CMS\CmsContactInformation;
use Illuminate\Database\Seeder;

class CmsContactInformationSeeder extends Seeder
{
    public function run(): void
    {
        CmsContactInformation::create([
            'phone_number' => '086873489247',
            'email' => 'pikisleman@gmail.com',
            'address' => 'Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta',
            'map_url' => 'https://maps.app.goo.gl/t6Wi9oD8e5D95hxv9',
            'whatsapp_url' => 'https://wa.me/',
            'facebook_url' => 'https://web.facebook.com/',
            'instagram_url' => 'https://www.instagram.com/piki_sleman/',
            'twitter_url' => 'https://twitter.com/',
            'youtube_url' => 'https://www.youtube.com/'
        ]);
    }
}
