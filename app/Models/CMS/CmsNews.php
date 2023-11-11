<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsNews extends Model
{
    use HasFactory;

    protected $table = 'cms_news';

    protected $fillable = [
        'title',
        'content',
        'image_news',
    ];
}
