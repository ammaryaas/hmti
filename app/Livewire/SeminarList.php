<?php

namespace App\Livewire;

use App\Models\Seminar;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SeminarList extends Component
{
    public function render(): View
    {
        return view('livewire.seminar-list', [
            'seminars' => Seminar::whereBetween('schedule', [
                now(),
                now()->addMonth()
            ])
            ->orderBy('schedule')
            ->get()
        ]);
    }
}
