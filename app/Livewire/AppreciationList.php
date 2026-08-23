<?php

namespace App\Livewire;

use App\Models\Appreciation;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AppreciationList extends Component
{
    public function render(): View
    {
        return view('livewire.appreciation-list', [
            'appreciations' => Appreciation::with('mahasiswa')
                ->latest('date')
                ->get(),
        ]);
    }
}
