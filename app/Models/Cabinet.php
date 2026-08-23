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
        'pl_name',
        'pl_logo',
        'pl_color',
        'status',
        'period',
    ];

    protected $casts = [
        'mission' => 'array',
        'photo' => 'array',
        'pl_logo' => 'array',
        'pl_color' => 'array'
    ];

    public function divisions()
    {
        return $this->hasMany(Division::class)->orderBy('sort_order', 'asc');
    }
}
