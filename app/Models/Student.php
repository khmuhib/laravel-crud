<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'course',
        'profile_image',
    ];

    public function phones()
    {
        return $this->hasOne(Phone::class);
    }
}
