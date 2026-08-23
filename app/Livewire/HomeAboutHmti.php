<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cabinet;

class HomeAboutHmti extends Component
{
    public function render()
    {
        return view('livewire.home-about-hmti', [
            'activeCabinet' => Cabinet::where('status', 'active')->first(),
        ]);
    }
}
