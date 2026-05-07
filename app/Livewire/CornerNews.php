<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Livewire\Component;

class CornerNews extends Component
{
    public function render(): View
    {
        return view('livewire.corner-news', [
            'newsItems' => $this->allNewsItems(),
        ]);
    }

    private function allNewsItems(): Collection
    {
        $table = 'news';

        if (!Schema::hasTable($table)) {
            return collect();
        }

        $columns = Schema::getColumnListing($table);
        $titleColumn = 'title';
        $imageColumn = $this->firstExistingColumn($columns, ['image', 'thumbnail', 'cover']);
        $dateColumn = $this->firstExistingColumn($columns, ['published_at', 'created_at', 'updated_at', 'tanggal']);

        $query = DB::table($table)->select([
            'id',
            DB::raw("`{$titleColumn}` as title"),
            $imageColumn ? DB::raw("`{$imageColumn}` as image") : DB::raw('NULL as image'),
            $dateColumn ? DB::raw("`{$dateColumn}` as published_at") : DB::raw('NULL as published_at'),
        ]);

        if ($dateColumn !== null) {
            $query->orderByDesc($dateColumn);
        } else {
            $query->orderByDesc('id');
        }

        return $query
            ->get()
            ->map(function (object $item): object {
                $item->image_url = $this->resolveImageUrl($item->image ?? null);

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
