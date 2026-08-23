<?php

namespace App\Filament\Resources\DataCenters\Pages;

use App\Filament\Resources\DataCenters\DataCenterResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDataCenter extends EditRecord
{
    protected static string $resource = DataCenterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
