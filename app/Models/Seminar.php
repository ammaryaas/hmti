<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'mahasiswa_id',
        'schedule',
        'location',
    ];

    protected $casts = [
        'schedule' => 'datetime'
    ];

    protected static array $statusConfig = [
        'internship' => [
            'label' => 'Seminar KP',
            'color' => 'bg-blue-500'
        ],
        'proposal' => [
            'label' => 'Seminar Proposal',
            'color' => 'bg-yellow-500'
        ],
        'final' => [
            'label' => 'Seminar Hasil',
            'color' => 'bg-green-500'
        ],
    ];

    public function getTypeLabelAttribute(): string
    {
        return self::$statusConfig[$this->type]['label']
            ?? $this->type;
    }

    public function getTypeColorAttribute(): string
    {
        return self::$statusConfig[$this->type]['color']
            ?? 'bg-gray-300';
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
