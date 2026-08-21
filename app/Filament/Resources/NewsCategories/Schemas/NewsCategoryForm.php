<?php

namespace App\Filament\Resources\NewsCategories\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class NewsCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Category Name')
                    ->placeholder('Berita')
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('desc')
                    ->label('Description')
                    ->placeholder('Publikasi informasi terbaru terkait himpunan')
                    ->columnSpanFull(),
                ColorPicker::make('color')
                    ->default('#ffffff')
                    ->required(), 
                Toggle::make('is_active')
                    ->label('Status')
                    ->helperText('adjust to change category visibility')
                    ->inline(false),
            ]);
    }
}
