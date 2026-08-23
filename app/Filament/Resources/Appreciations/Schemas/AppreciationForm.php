<?php

namespace App\Filament\Resources\Appreciations\Schemas;

use App\Filament\Schemas\Components\BioMahasiswa;
use App\Models\Mahasiswa;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class AppreciationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Apresiasi')
                    ->placeholder('cth. Juara 1 Lomba UI/UX Design Nasional')
                    ->required()
                    ->maxLength(255),

                DatePicker::make('date')
                    ->label('Tanggal Apresiasi')
                    ->required(),

                FileUpload::make('photo')
                    ->label('Foto Dokumentasi / Apresiasi')
                    ->disk('public')
                    ->directory('appreciations')
                    ->image()
                    ->required()
                    ->columnSpanFull(),

                Section::make('Mahasiswa Delegasi')
                    ->columnSpanFull()
                    ->schema([
                        Select::make('mahasiswa_id')
                            ->hiddenLabel()
                            ->placeholder('Pilih Mahasiswa / Cari NIM')
                            ->options(Mahasiswa::pluck('NIM', 'id'))
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function (Set $set, ?string $state) {
                                $mhs = Mahasiswa::find($state);
                                $set('nama', $mhs?->nama ?? null);
                                $set('angkatan', (string) ($mhs?->angkatan ?? ''));
                                $set('foto', $mhs?->foto ?? null);
                            })
                            ->afterStateHydrated(function (Set $set, ?string $state) {
                                $mhs = Mahasiswa::find($state);
                                $set('nama', $mhs?->nama ?? null);
                                $set('angkatan', (string) ($mhs?->angkatan ?? ''));
                                $set('foto', $mhs?->foto ?? null);
                            })
                            ->required()
                            ->validationMessages([
                                'required' => 'Mahasiswa delegasi wajib dipilih',
                            ]),

                        BioMahasiswa::make()
                            ->visible(fn (Get $get): bool => filled($get('mahasiswa_id'))),
                    ]),
            ]);
    }
}
