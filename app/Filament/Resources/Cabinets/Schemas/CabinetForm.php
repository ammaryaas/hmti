<?php

namespace App\Filament\Resources\Cabinets\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
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
                    ->placeholder('Sinkronisasi')
                    ->columnSpanFull()
                    ->unique()
                    ->required(),

                Textarea::make('vision')
                    ->label('Visi')
                    ->placeholder('Mewujudkan HMTI Unsoed yang harmonis...')
                    ->rows(2)
                    ->columnSpanFull()
                    ->required(),

                Repeater::make('mission')
                    ->label('Misi')
                    ->simple(
                        Textarea::make('mission')
                            ->hiddenLabel()
                            ->placeholder('Membangun harmoni dan kekeluargaan internal HMTI...')
                            ->rows(2)
                    )
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

                Select::make('period')
                    ->label('Tahun')
                    ->options(
                        collect(range(2015, date('Y')))
                            ->mapWithKeys(fn($year) => [$year => $year])
                            ->toArray()
                    )
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state == now()->year) {
                            $set('status', 'active');
                        } else {
                            $set('status', 'inactive');
                        }
                    })
                    ->required(),

                Radio::make('status')
                    ->label('Status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->inline()
                    ->disabled(fn($get) => !filled($get('status')))
                    ->required(),
                
                Section::make('Additional Information')
                    ->description('Active cabinets must provide additional information')
                    ->schema([
                        Textarea::make('pl_name')
                            ->label('Name Philosophy')
                            ->required(fn($get) => $get('period') == now()->year),

                        Repeater::make('pl_logo')
                            ->label('Logo Philosophy')
                            ->simple(
                                Textarea::make('pl_logo')
                                    ->hiddenLabel()
                                    ->rows(2)
                            )
                            ->addAction(
                                fn($action) => $action
                                    ->label('')
                                    ->icon(Heroicon::Plus)
                                    ->tooltip('Tambah Poin')
                            )
                            ->mutateDehydratedStateUsing(fn ($state) =>
                                collect($state)->pluck('pl_logo')->toArray()
                            )
                            ->reorderable()
                            ->collapsible()
                            ->minItems(1)
                            ->columnSpanFull()
                            ->required(fn($get) => $get('period') == now()->year),

                        Repeater::make('pl_color')
                            ->label('Color Philosophy')
                            ->schema([
                                ColorPicker::make('color')
                                    ->label('Warna')
                                    ->required(),
                                Textarea::make('desc')
                                    ->label('Makna Filosofi')
                                    ->rows(2)
                                    ->required(),
                            ])
                            ->addAction(
                                fn($action) => $action
                                    ->label('')
                                    ->icon(Heroicon::Plus)
                                    ->tooltip('Tambah Poin Warna')
                            )
                            ->columns(2)
                            ->reorderable()
                            ->collapsible()
                            ->minItems(1)
                            ->columnSpanFull()
                            ->required(fn($get) => $get('period') == now()->year),
                    ])
                    ->columnSpanFull()
                    ->visible(fn($get) => $get('period') == now()->year),

            ]);
    }
}
