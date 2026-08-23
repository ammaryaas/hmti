<?php

namespace App\Filament\Resources\DataCenters\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DataCenterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Data Center')
                    ->placeholder('Contoh: AD/ART HMTI')
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->placeholder('Deskripsi singkat atau catatan (opsional)')
                    ->rows(3)
                    ->columnSpanFull(),

                TextInput::make('link')
                    ->label('Link / URL Tujuan')
                    ->placeholder('https://drive.google.com/...')
                    ->url()
                    ->required()
                    ->columnSpanFull(),

                Select::make('icon')
                    ->label('Icon')
                    ->options([
                        'heroicon-o-document-text' => 'Document / File',
                        'heroicon-o-document-duplicate' => 'Documents / GBHK',
                        'heroicon-o-calendar' => 'Calendar / Agenda',
                        'heroicon-o-academic-cap' => 'Academic',
                        'heroicon-o-book-open' => 'Book / Guide',
                        'heroicon-o-folder' => 'Folder / Storage',
                        'heroicon-o-link' => 'Link / Website',
                        'heroicon-o-chart-bar' => 'Chart / Stats',
                        'heroicon-o-circle-stack' => 'Database / Center',
                    ])
                    ->default('heroicon-o-document-text')
                    ->searchable()
                    ->required(),

                ColorPicker::make('color')
                    ->label('Warna Icon')
                    ->default('#10b981')
                    ->required(),
            ]);
    }
}
