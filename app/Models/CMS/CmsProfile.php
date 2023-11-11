<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsProfile extends Model
{
    use HasFactory;

    protected $table = 'cms_profile';

    protected $fillable = [
        'sejarah',
        'foundation',
        'visi_misi',
    ];
}
