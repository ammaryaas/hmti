<?php

namespace App\Filament\Resources\Graduations\Pages;

use App\Filament\Resources\Graduations\GraduationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGraduation extends EditRecord
{
    protected static string $resource = GraduationResource::class;

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
