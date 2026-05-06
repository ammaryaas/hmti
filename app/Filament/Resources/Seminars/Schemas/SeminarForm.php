<?php

namespace App\Filament\Resources\Seminars\Schemas;

use App\Models\Mahasiswa;
use App\Filament\Schemas\Components\BioMahasiswa;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class SeminarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Seminar')
                    ->required(),

                Radio::make('type')
                    ->label('Tipe Seminar')
                    ->options([
                        'internship' => 'Kerja Praktek',
                        'proposal' => 'Proposal',
                        'final' => 'Hasil',
                    ])
                    ->inline()
                    ->required(),

                Section::make('Mahasiswa')
                    ->columnSpanFull()
                    ->schema([
                    Select::make('mahasiswa_id')
                        ->hiddenLabel()
                        ->placeholder('Masukkan NIM')
                        ->options(Mahasiswa::pluck('NIM', 'id'))
                        ->searchable()
                        ->preload()
                        ->live()
                        ->afterStateUpdated(function (Set $set, ?string $state) {
                            $mhs = Mahasiswa::find($state);
                            $set('nama',     $mhs?->nama             ?? null);
                            $set('angkatan', (string)($mhs?->angkatan ?? ''));
                            $set('foto',     $mhs?->foto             ?? null);
                        })
                        ->afterStateHydrated(function (Set $set, ?string $state) {
                            $mhs = Mahasiswa::find($state);
                            $set('nama',     $mhs?->nama             ?? null);
                            $set('angkatan', (string)($mhs?->angkatan ?? ''));
                            $set('foto',     $mhs?->foto             ?? null);
                        })
                        ->required()
                        ->validationMessages([
                            'required' => 'Please fill out this field'
                        ]),

                    // Biodata dengan foto di kiri
                    BioMahasiswa::make()
                        ->visible(fn (Get $get): bool => filled($get('mahasiswa_id'))),
                ]),

                TextInput::make('location')
                    ->label('Ruangan')
                    ->required(),

                DateTimePicker::make('schedule')
                    ->label('Jadwal Seminar')
                    ->required(),
            ]);
    }
}
