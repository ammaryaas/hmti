<?php

namespace App\Filament\Resources\StudentInfos\Pages;

use App\Filament\Resources\StudentInfos\StudentInfoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStudentInfo extends EditRecord
{
    protected static string $resource = StudentInfoResource::class;

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
