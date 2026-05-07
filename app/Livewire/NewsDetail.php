<?php

namespace App\Livewire;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

class NewsDetail extends Component
{
    public News $news;

    public string $formattedDate = '';

    public ?string $imageUrl = null;

    public function mount(News $news): void
    {
        $this->news = $news;
        $this->imageUrl = $this->resolveImageUrl($news->image);
        $this->formattedDate = $this->formatPublishedDate($news);
    }

    public function render(): View
    {
        return view('livewire.news-detail');
    }

    private function formatPublishedDate(News $news): string
    {
        $date = $news->published_at ?? $news->created_at;

        if ($date === null) {
            return '';
        }

        return $date->translatedFormat('d F Y');
    }

    private function resolveImageUrl(?string $imagePath): ?string
    {
        if (!$imagePath) {
            return null;
        }

        if (Str::startsWith($imagePath, ['http://', 'https://', '/'])) {
            return $imagePath;
        }

        if (Str::startsWith($imagePath, ['assets/', 'images/', 'storage/'])) {
            return asset($imagePath);
        }

        return asset('storage/' . ltrim($imagePath, '/'));
    }
}
