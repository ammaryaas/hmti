<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('mahasiswa_id')
                    ->relationship(name: 'mahasiswa', titleAttribute: 'nama')
                    ->placeholder('Select Student')
                    ->required(),
                Select::make('division_id')
                    ->relationship(name: 'division', titleAttribute: 'name')
                    ->placeholder('Select Division')
                    ->required(),
                TextInput::make('position')
                    ->placeholder('Ketua Umum')
                    ->required(),
                FileUpload::make('photo')
                    ->helperText('Photo will appears on structure view'),
            ]);
    }
}
