<?php

namespace App\Filament\Widgets;

use App\Models\Graduation;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class RecentGraduation extends TableWidget
{
    protected static ?int $sort = 5;

    protected static ?string $heading = 'Data Wisuda Terakhir';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Graduation::query()
                    ->withCount('mahasiswa')
                    ->latest('schedule')
                    ->limit(5)
            )
            ->columns([
                ImageColumn::make('photo')
                    ->label('')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title')
                    ->label('Periode Wisuda')
                    ->weight('bold'),

                TextColumn::make('schedule')
                    ->label('Tanggal Pelaksanaan')
                    ->date('d F Y'),

                TextColumn::make('mahasiswa_count')
                    ->label('Total Wisudawan')
                    ->badge()
                    ->color('success'),
            ])
            ->paginated(false);
    }
}
