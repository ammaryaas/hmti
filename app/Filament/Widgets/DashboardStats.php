<?php

namespace App\Filament\Widgets;

use App\Models\Cabinet;
use App\Models\Mahasiswa;
use App\Models\News;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalCorner extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Corner', News::count())
                ->icon(Heroicon::Newspaper),

            Stat::make('Total Mahasiswa', Mahasiswa::count())
                ->icon(Heroicon::UserGroup),

            Stat::make('Total Cabinet', Cabinet::count())
                ->icon(Heroicon::BuildingLibrary),
            
        ];
    }
}
