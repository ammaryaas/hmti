<?php

namespace App\Filament\Resources\StudentInfos\Pages;

use App\Filament\Resources\StudentInfos\StudentInfoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudentInfo extends CreateRecord
{
    protected static string $resource = StudentInfoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
