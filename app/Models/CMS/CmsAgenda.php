<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsAgenda extends Model
{
    use HasFactory;

    protected $table = 'cms_agenda';

    protected $fillable = [
        'activity',
        'date',
        'start_date',
        'finish_date',
        'title',
        'note',
    ];
}
