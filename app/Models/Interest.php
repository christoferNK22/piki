<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
        'code',
        'name',
    ];

    public function members()
    {
        return $this->hasMany(Member::class)->where('is_verified', 1);
    }
}
