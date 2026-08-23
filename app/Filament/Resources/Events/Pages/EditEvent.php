<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Carbon\Carbon;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $start = Carbon::parse($data['start_at']);
        $end = Carbon::parse($data['end_at']);

        $data['start_date'] = $start->format('Y-m-d');
        $data['start_time'] = $start->format('H:i');

        $data['end_date'] = $end->format('Y-m-d');
        $data['end_time'] = $end->format('H:i');

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
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
