<?php

namespace App\Livewire;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CornerNews extends Component
{
    public function render(): View
    {
        // Data dummy sementara untuk mengecek layout
        $dummyNews = collect([
            (object)[
                'title' => 'JLorem Ipsum (Headline)',
                'slug' => 'dummy-1',
                'image' => null,
                'category' => 'Berita',
                'created_at' => now(),
            ],
            (object)[
                'title' => 'JLorem Ipsum (Headline)',
                'slug' => 'dummy-2',
                'image' => null,
                'category' => 'Prestasi',
                'created_at' => now()->subDays(1),
            ],
            (object)[
                'title' => 'JLorem Ipsum (Headline)',
                'slug' => 'dummy-3',
                'image' => null,
                'category' => 'Event',
                'created_at' => now()->subDays(2),
            ],
            (object)[
                'title' => 'JLorem Ipsum (Headline)',
                'slug' => 'dummy-4',
                'image' => null,
                'category' => 'Event/Prestasi/Berita',
                'created_at' => now()->subDays(3),
            ],
            (object)[
                'title' => 'JLorem Ipsum (Headline)',
                'slug' => 'dummy-5',
                'image' => null,
                'category' => 'Berita',
                'created_at' => now()->subDays(4),
            ],
        ]);

        return view('livewire.corner-news', [
            //  'newsItems' => News::where('status', 'published')
            //     ->orderBy('published_at')
            //     ->get()
            'newsItems' => $dummyNews
        ]);
    }
}
