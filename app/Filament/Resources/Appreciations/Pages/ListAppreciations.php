<?php

namespace App\Filament\Resources\Appreciations\Pages;

use App\Filament\Resources\Appreciations\AppreciationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAppreciations extends ListRecords
{
    protected static string $resource = AppreciationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
