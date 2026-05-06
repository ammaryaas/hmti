<?php

namespace App\Filament\Resources\Mahasiswas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MahasiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->extraAttributes([
                'novalidate' => true
            ])
            ->components([
                TextInput::make('nama')
                    ->label('Nama')
                    ->columnSpanFull()
                    ->live(onBlur: true)
                    ->required(),

                TextInput::make('NIM')
                    ->label('NIM')
                    ->unique()
                    ->length(9)
                    ->live(onBlur: true)
                    ->validationMessages([
                        'unique' => 'This attribute has already exist',
                        'lenght' => 'Please input the correct ID order',
                    ])
                    ->required(),

                Select::make('angkatan')
                    ->label('Angkatan')
                    ->options(
                        collect(range(2020, date('Y')))
                            ->mapWithKeys(fn ($year) => [$year => $year])
                            ->toArray()    
                    ),

                FileUpload::make('foto')
                    ->label('Foto Mahasiswa')
                    ->disk('public')
                    ->directory('mahasiswa')
                    ->image()
                    ->columnSpanFull()
            ]);
    }
}
