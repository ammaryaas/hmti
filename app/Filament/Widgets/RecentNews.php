<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class RecentNews extends TableWidget
{
    protected static ?int $sort = 3;

    protected static ?string $heading = 'Berita Corner Terbaru';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                News::query()
                    ->with('news_category')
                    ->latest('published_at')
                    ->limit(5)
            )
            ->columns([
                ImageColumn::make('image')
                    ->label('')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title')
                    ->label('Judul Berita')
                    ->weight('bold')
                    ->limit(30),

                TextColumn::make('news_category.name')
                    ->label('Kategori')
                    ->badge(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'published' => 'success',
                        'draft' => 'gray',
                        default => 'warning',
                    }),

                TextColumn::make('published_at')
                    ->label('Tanggal')
                    ->dateTime('d M Y')
                    ->placeholder('-'),
            ])
            ->paginated(false);
    }
}
