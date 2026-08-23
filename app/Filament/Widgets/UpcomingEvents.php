<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class UpcomingEvents extends TableWidget
{
    protected static ?int $sort = 2;

    protected static ?string $heading = 'Event & Agenda Mendatang';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Event::query()
                    ->where('is_published', true)
                    ->where('start_at', '>=', now()->startOfDay())
                    ->orderBy('start_at', 'asc')
                    ->limit(5)
            )
            ->columns([
                ImageColumn::make('image')
                    ->label('')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title')
                    ->label('Event')
                    ->weight('bold')
                    ->limit(25),

                TextColumn::make('formatted_date')
                    ->label('Pelaksanaan'),

                TextColumn::make('location')
                    ->label('Lokasi')
                    ->limit(20),
            ])
            ->paginated(false);
    }
}
