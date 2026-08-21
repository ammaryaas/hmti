<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->columnSpanFull()
                    ->required(),

                Textarea::make('desc')
                    ->label('Description')
                    ->columnSpanFull()
                    ->required(),

                Toggle::make('has_time')
                    ->default(false)
                    ->helperText('turn it on when you need time details')
                    ->live(),

                Toggle::make('has_end')
                    ->label('Has end date')
                    ->default(false)
                    ->helperText('helps you to fill in the details of when the event will end.')
                    ->live(),

                DatePicker::make('start_date')
                    ->seconds(false)
                    ->required(),

                TimePicker::make('start_time')
                    ->seconds(false)
                    ->visible(fn (Get $get) => $get('has_time')),

                DatePicker::make('end_date')
                    ->seconds(false)
                    ->visible(fn (Get $get) => $get('has_end')),

                TimePicker::make('end_time')
                    ->seconds(false)
                    ->visible(fn (Get $get) => $get('has_time') && $get('has_end')),

                TextInput::make('location')
                    ->required(),

                FileUpload::make('image'),

                Toggle::make('is_published')
                    ->inline(false),
            ]);
    }
}
