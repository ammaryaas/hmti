<?php

namespace App\Filament\Resources\Graduations\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;

class MahasiswaRelationManager extends RelationManager
{
    protected static string $relationship = 'mahasiswa';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama')
                    ->placeholder('Cahya Widya Wati')
                    ->columnSpanFull()
                    ->live(onBlur: true)
                    ->required(),

                TextInput::make('NIM')
                    ->label('NIM')
                    ->placeholder('H1E022001')
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
                            ->mapWithKeys(fn($year) => [$year => $year])
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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('NIM')
            ->columns([
                TextColumn::make('nama'),
                TextColumn::make('NIM')
                    ->label('NIM')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
                AssociateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DissociateAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
