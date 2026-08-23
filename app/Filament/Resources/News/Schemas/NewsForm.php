<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Pengabdian Masyarakat')
                    ->columnSpanFull()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    )
                    ->required(),

                TextInput::make('slug')
                    ->required()
                    ->hint('Keep it empty to automatically generate.')
                    ->unique(ignoreRecord: true),
                    
                Select::make('news_category_id')
                    ->label('Category')
                    ->relationship(name: 'news_category', titleAttribute: 'name')
                    ->preload()
                    ->required(),

                RichEditor::make('content')
                    ->label('News Content')
                    ->placeholder('Write down your news content here...')
                    ->columnSpanFull()
                    ->required(),

                FileUpload::make('image')
                    ->helperText('Main image')
                    ->image()
                    ->disk('public')
                    ->directory('news-images'),

                FileUpload::make('collection')
                    ->label('Collection')
                    ->helperText('This image will appears on bottom of the page')
                    ->multiple()
                    ->image()
                    ->disk('public')
                    ->directory('news-images'),

                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->default('draft')
                    ->required(),
            ]);
    }
}
