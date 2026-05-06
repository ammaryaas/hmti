<?php

namespace App\Filament\Widgets;

use App\Models\Seminar as ModelsSeminar;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class RecentSeminar extends TableWidget
{
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => ModelsSeminar::query())
            ->columns([
                TextColumn::make('mahasiswa.nama'),
                TextColumn::make('location'),
                TextColumn::make('schedule')
                    ->date('M j, Y H:i'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
