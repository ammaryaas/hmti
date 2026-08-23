<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'image',
        'start_at',
        'end_at',
        'has_time',
        'location',
        'link',
        'is_published'
    ];

    protected function casts(): array
    {
        return [
            'start_at' => 'datetime',
            'end_at' => 'datetime',
            'has_time' => 'boolean',
        ];
    }

    /**
     * Human-friendly date range string.
     */
    public function getFormattedDateAttribute(): string
    {
        $start = $this->start_at;
        $end = $this->end_at;

        if ($end) {
            $sameYear = $start->year === $end->year;
            $sameMonth = $sameYear && $start->month === $end->month;
            $sameDay = $sameMonth && $start->day === $end->day;

            if ($sameDay) {
                $dateStr = $start->translatedFormat('j F Y');
            } elseif ($sameMonth) {
                $dateStr = $start->translatedFormat('j') . ' – ' . $end->translatedFormat('j F Y');
            } elseif ($sameYear) {
                $dateStr = $start->translatedFormat('j F') . ' – ' . $end->translatedFormat('j F Y');
            } else {
                $dateStr = $start->translatedFormat('j F Y') . ' – ' . $end->translatedFormat('j F Y');
            }

            if ($this->has_time) {
                $dateStr .= ', ' . $start->translatedFormat('H:i') . ' – ' . $end->translatedFormat('H:i') . ' WIB';
            }
        } else {
            $dateStr = $start->translatedFormat('j F Y');
            if ($this->has_time) {
                $dateStr .= ', ' . $start->translatedFormat('H:i') . ' WIB';
            }
        }

        return $dateStr;
    }
}
