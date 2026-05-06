<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'vision',
        'mission',
        'photo',
        'status',
        'period',
    ];

    protected $casts = [
        'mission' => 'array',
        'photo' => 'array'
    ];
}
