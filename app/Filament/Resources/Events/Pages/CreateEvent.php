<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Carbon\Carbon;
use Filament\Resources\Pages\CreateRecord;

use function PHPUnit\Framework\isNull;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $startTime = $data['has_time']
            ? ($data['start_time'] ?? '00:00')
            : '00:00';

        $endTime = $data['has_time']
            ? ($data['end_time'] ?? '00:00')
            : '00:00';

        $data['start_at'] = Carbon::parse(
            $data['start_date'] . ' ' . $startTime
        );

        if (isset($data['end_date'])) {
            $data['end_at'] = Carbon::parse(
                $data['end_date'] . ' ' . $endTime
            );
        } else {
            $data['end_at'] = null;
        }

        unset(
            $data['start_date'],
            $data['start_time'],
            $data['end_date'],
            $data['end_time']
        );

        return $data;
    }
}
