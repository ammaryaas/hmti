<?php

namespace App\Filament\Resources\StudentInfos\Pages;

use App\Filament\Resources\StudentInfos\StudentInfoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStudentInfos extends ListRecords
{
    protected static string $resource = StudentInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
