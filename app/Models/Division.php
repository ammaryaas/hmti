<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'cabinet_id',
        'name',
        'desc',
        'image',
        'sort_order'
    ];

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class);    
    }

    public function member()
    {
        return $this->hasMany(Member::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
