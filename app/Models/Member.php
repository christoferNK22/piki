<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'bod',
        'password',
        'contact',
        'address',
        'gender',
        'year_in',
        'church_id',
        'interest_id',
        'education_id',
        'is_verified',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $appends = ["member_identity"];
    public function memberIdentity(): Attribute
    {
        return Attribute::make(
            get: function () {
                $interestCount = $this->interest()->where('id', $this->id)->count() + 1;
                return $this->interest->code . "-" . $interestCount;
            }
        );
    }

    public function church()
    {
        return $this->belongsTo(Church::class);
    }

    public function interest()
    {
        return $this->belongsTo(Interest::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
