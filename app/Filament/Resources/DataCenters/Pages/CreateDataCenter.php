<?php

namespace App\Filament\Resources\DataCenters\Pages;

use App\Filament\Resources\DataCenters\DataCenterResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDataCenter extends CreateRecord
{
    protected static string $resource = DataCenterResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
