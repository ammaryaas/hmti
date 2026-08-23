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
            'newsItems' => News::with('news_category')
                ->where('status', 'published')
                ->orderByDesc('published_at')
                ->get()
        ]);
    }
}
