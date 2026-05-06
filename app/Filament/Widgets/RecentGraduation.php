<?php

namespace App\Filament\Widgets;

use App\Models\Graduation as ModelsGraduation;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class RecentGraduation extends TableWidget
{
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => ModelsGraduation::query())
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('mahasiswa_count')
                    ->label('Total Graduate')
                    ->counts('mahasiswa'),
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
