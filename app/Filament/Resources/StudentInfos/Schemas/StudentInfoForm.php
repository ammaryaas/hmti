<?php

namespace App\Filament\Resources\StudentInfos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StudentInfoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Info Lomba')
                    ->required()
                    ->maxLength(255),

                TextInput::make('link')
                    ->label('Link / URL')
                    ->placeholder('https://...')
                    ->url()
                    ->required()
                    ->maxLength(255),

                FileUpload::make('photo')
                    ->label('Banner / Information Photo')
                    ->disk('public')
                    ->directory('student-infos')
                    ->image()
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Description (Optional)')
                    ->rows(3)
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Active (Display on Homepage)')
                    ->default(true),
            ]);
    }
}
