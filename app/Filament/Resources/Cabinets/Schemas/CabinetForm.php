<?php

namespace App\Filament\Resources\Cabinets\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class CabinetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Kabinet')
                    ->columnSpanFull()
                    ->unique()
                    ->required(),

                Textarea::make('vision')
                    ->label('Visi')
                    ->rows(2)
                    ->columnSpanFull()
                    ->required(),

                Repeater::make('mission')
                    ->label('Misi')
                    ->schema([
                        Textarea::make('mission')
                            ->hiddenLabel()
                            ->rows(2)
                    ])
                    ->addAction(
                        fn($action) => $action
                            ->label('')
                            ->icon(Heroicon::Plus)
                            ->tooltip('Tambah Misi')
                    )
                    ->mutateDehydratedStateUsing(fn ($state) =>
                        collect($state)->pluck('mission')->toArray()
                    )
                    ->reorderable()
                    ->collapsible()
                    ->minItems(1)
                    ->columnSpanFull()
                    ->required(),

                FileUpload::make('logo')
                    ->label('Logo')
                    ->disk('public')
                    ->directory('cabinet')
                    ->required(),

                FileUpload::make('photo')
                    ->label('Foto Kabinet')
                    ->multiple()
                    ->image()
                    ->reorderable()
                    ->disk('public')
                    ->directory('cabinet'),

                Radio::make('status')
                    ->label('Status')
                    ->options([
                        'active' => 'aktif',
                        'inactive' => 'nonaktif',
                    ])
                    ->inline()
                    ->required(),

                Select::make('period')
                    ->label('Tahun')
                    ->options(
                        collect(range(2020, date('Y')))
                            ->mapWithKeys(fn($year) => [$year => $year])
                            ->toArray()
                    )
                    ->required(),
            ]);
    }
}
