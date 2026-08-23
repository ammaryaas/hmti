<?php

namespace App\Filament\Widgets;

use App\Models\Seminar;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class RecentSeminar extends TableWidget
{
    protected static ?int $sort = 4;

    protected static ?string $heading = 'Jadwal Seminar Terdaftar';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Seminar::query()
                    ->with('mahasiswa')
                    ->latest('schedule')
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('mahasiswa.nama')
                    ->label('Mahasiswa')
                    ->description(fn (Seminar $record): ?string => $record->mahasiswa?->NIM)
                    ->weight('bold'),

                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'proposal' => 'info',
                        'hasil' => 'warning',
                        'sidang' => 'success',
                        default => 'gray',
                    }),

                TextColumn::make('location')
                    ->label('Ruangan'),

                TextColumn::make('schedule')
                    ->label('Jadwal')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->paginated(false);
    }
}
