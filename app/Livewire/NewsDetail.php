<?php

namespace App\Livewire;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Livewire\Component;

use function Livewire\Volt\layout;

class NewsDetail extends Component
{
    public News $news;

    public function mount($slug)
    {
        $this->news = News::where('slug', $slug)->firstOrFail();
    }

    public function render(): View
    {
        return view('livewire.news-detail')
            ->layout('layouts.app');
    }
}
