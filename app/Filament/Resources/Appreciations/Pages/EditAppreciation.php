<?php

namespace App\Filament\Resources\Appreciations\Pages;

use App\Filament\Resources\Appreciations\AppreciationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAppreciation extends EditRecord
{
    protected static string $resource = AppreciationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
