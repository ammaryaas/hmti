<?php

namespace App\Filament\Resources\Divisions\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DivisionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('cabinet_id')
                    ->label('Cabinet')
                    ->relationship(name: 'cabinet', titleAttribute: 'name')
                    ->placeholder('Choose cabinets to attach')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('name')
                    ->label('Department Name')
                    ->placeholder('Badan Pengurus Harian')
                    ->required(),
                Textarea::make('desc')
                    ->label('Description')
                    ->placeholder('Divisi yang bertanggung jawab atas...')
                    ->required(),
                FileUpload::make('image'),
                TextInput::make('sort_order')
                    ->placeholder('1')
                    ->helperText('Help you manage the display order.')
                    ->numeric()
                    ->minValue(1)
            ]);
    }
}
