<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'hashid',
        'visits'
    ];

    public static function booted(){
        static::created(function ($url) {
            //
        });
    }

    public function redirectUrl(){
        return route('redirect', ['url' => $this]);
    }
}
