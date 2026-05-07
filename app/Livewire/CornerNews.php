<?php

namespace App\Livewire;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CornerNews extends Component
{
    public function render(): View
    {
        return view('livewire.corner-news', [
            'newsItems' => News::where('status', 'published')
                ->orderBy('published_at')
                ->get()
        ]);
    }
}
