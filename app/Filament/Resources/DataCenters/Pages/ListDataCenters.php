<?php

namespace App\Filament\Resources\DataCenters\Pages;

use App\Filament\Resources\DataCenters\DataCenterResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDataCenters extends ListRecords
{
    protected static string $resource = DataCenterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
