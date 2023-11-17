<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsVisiMisi extends Model
{
    use HasFactory;

    protected $table = 'cms_visi_misi';

    protected $fillable = [
        'visi1',
        'visi2',
        'visi3',
        'visi4',
        'visi5',
    ];
}
