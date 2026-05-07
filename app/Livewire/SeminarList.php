<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class SeminarList extends Component
{
    public function render(): View
    {
        $seminars = [
            [
                'student_name' => 'Ahmad Fauzan',
                'date' => '12 Agustus 2026',
                'location' => 'Ruang Seminar Teknik Industri',
                'title' => 'Strategi Peningkatan Mutu Pelayanan Rumah Sakit dengan Pendekatan Model CARTER, Potential Gain Customer Value (PGCV), dan Zone of Tolerance (ZOT)',
            ],
        ];

        return view('livewire.seminar-list', [
            'seminars' => $seminars,
        ]);
    }
}
