<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsManagement extends Model
{
    use HasFactory;

    protected $table = 'cms_management';

    protected $fillable = [
        'dewan',
        'position',
        'name',
        'origin',
        'image',
    ];
}
