<?php

namespace App\Filament\Resources\Seminars\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeminarsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->limit(30)
                    ->tooltip(fn ($record) => $record->title),
                TextColumn::make('mahasiswa.nama'),
                TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'internship' => 'gray',
                        'proposal' => 'warning',
                        'final' => 'success'
                    }),
                TextColumn::make('location'),
                TextColumn::make('schedule')
                    ->dateTime('M j, Y H:i'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
