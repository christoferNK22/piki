<?php

namespace App\Models\CMS;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
    public $appends = ['created_at_format'];

    public function createdAtFormat(): Attribute
    {
        return Attribute::make(get: function () {
            $dateObj = Carbon::parse($this->created_at);
            $dateObj->setLocale('id');
            $formattedDate = $dateObj->isoFormat('dddd, D MMMM YYYY');
            return $formattedDate;
        });
    }

    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', '%' . $value . '%');
    }
}
