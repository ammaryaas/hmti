<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Livewire\Component;

class HomeLatestNews extends Component
{
    public int $perPage = 4;

    public int $currentPage = 0;

    private ?string $detectedTable = null;

    public function nextSlide(): void
    {
        if ($this->hasNextPage()) {
            $this->currentPage++;
        }
    }

    public function prevSlide(): void
    {
        if ($this->currentPage > 0) {
            $this->currentPage--;
        }
    }

    public function render(): View
    {
        $table = 'news';
        $totalNews = $this->totalNews();
        $newsItems = $this->currentNewsItems();

        return view('livewire.home-latest-news', [
            'table' => $table,
            'totalNews' => $totalNews,
            'newsItems' => $newsItems,
            'showSliderControls' => $totalNews > $this->perPage,
            'canGoPrev' => $this->currentPage > 0,
            'canGoNext' => $this->hasNextPage(),
        ]);
    }

    private function hasNextPage(): bool
    {
        return (($this->currentPage + 1) * $this->perPage) < $this->totalNews();
    }

    private function totalNews(): int
    {
        $table = 'news';

        if ($table === null) {
            return 0;
        }

        return (int) DB::table($table)->count();
    }

    private function currentNewsItems(): Collection
    {
        $table = 'news';

        $columns = Schema::getColumnListing($table);

        $titleColumn = 'title';
        $excerptColumn = $this->firstExistingColumn($columns, ['excerpt', 'ringkasan', 'summary', 'description', 'deskripsi', 'content', 'isi']);
        $imageColumn = 'image';
        $dateColumn = $this->firstExistingColumn($columns, ['published_at', 'created_at', 'updated_at', 'tanggal']);

        $query = DB::table($table)->select([
            'id',
            'slug',
            DB::raw("`{$titleColumn}` as title"),
            $excerptColumn ? DB::raw("`{$excerptColumn}` as excerpt") : DB::raw('NULL as excerpt'),
            $imageColumn ? DB::raw("`{$imageColumn}` as image") : DB::raw('NULL as image'),
            $dateColumn ? DB::raw("`{$dateColumn}` as published_at") : DB::raw('NULL as published_at'),
        ]);

        if ($dateColumn !== null) {
            $query->orderByDesc($dateColumn);
        } else {
            $query->orderByDesc('id');
        }

        return $query
            ->skip($this->currentPage * $this->perPage)
            ->take($this->perPage)
            ->get()
            ->map(function (object $item): object {
                $item->image_url = $this->resolveImageUrl($item->image ?? null);
                $item->excerpt = $item->excerpt ? Str::limit(strip_tags((string) $item->excerpt), 110) : null;

                return $item;
            });
    }

    private function firstExistingColumn(array $columns, array $candidates): ?string
    {
        foreach ($candidates as $column) {
            if (in_array($column, $columns, true)) {
                return $column;
            }
        }

        return null;
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
