<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Model;

class CmsContactInformation extends Model
{
    protected $fillable = [
        'phone_number',
        'email',
        'address',
        'map_url',
        'whatsapp_url',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'youtube_url',
    ];
}
