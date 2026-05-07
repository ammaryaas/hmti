<?php

namespace App\Filament\Resources\Graduations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GraduationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Periode Wisuda')
                    ->required(),

                DatePicker::make('schedule')
                    ->label('Hari/Tanggal')
                    ->required(),
                
                FileUpload::make('photo')
                    ->label('Foto Wisuda')
                    ->disk('public')
                    ->directory('wisuda')
                    ->image()
                    ->columnSpanFull()
            ]);
    }
}
