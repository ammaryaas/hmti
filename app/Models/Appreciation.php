<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appreciation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'photo',
        'date',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
