<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'NIM',
        'foto',
        'angkatan',
        'graduation_id',
    ];

    public function seminar()
    {
        return $this->hasMany(Seminar::class);
    }

    public function graduation()
    {
        return $this->belongsTo(Graduation::class);
    }
}
