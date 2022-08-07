<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_name',
        'students_id',
        'phone_number',
        'phone_model',
    ];

    public function students()
    {
        return $this->belongsTo(Phone::class);
    }
}
