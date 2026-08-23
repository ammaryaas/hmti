<?php

namespace App\Livewire;

use App\Models\Cabinet;
use Livewire\Component;

class AboutUsStruktur extends Component
{
    public function render()
    {
        return view('livewire.about-us-struktur', [
            'activeCabinet' => Cabinet::with(['divisions.members.mahasiswa'])
                ->where('status', 'active')
                ->first(),
        ]);
    }
}
