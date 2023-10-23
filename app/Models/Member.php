<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

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
        'image_path',
        'is_verified',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $appends = ["member_identity", "bod_format"];
    protected $casts = ['is_verified' => 'boolean'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->password = $model->password;
            $model->is_verified = 0;
        });
    }

    public function memberIdentity(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (!$this->is_verified)
                    return '-';
                $interestMembers = Interest::find($this->interest_id)->members;
                $count = 1;
                foreach ($interestMembers as $member) {
                    if ($member->id == $this->id) {
                        break;
                    }
                    $count++;
                }
                return $this->interest->code . "-" . $count;
            }
        );
    }

    protected function bodFormat(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->bod)->format('d F Y'),
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
