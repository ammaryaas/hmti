<?php

namespace App\Livewire;

use App\Models\Graduation;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class WisudaPage extends Component
{
    public function render(): View
    {
        return view('livewire.wisuda-page', [
            'graduates' => Graduation::with('mahasiswa')
                ->where('schedule', '>=', today())
                ->orderBy('schedule')
                ->first()
        ]);
    }
}
