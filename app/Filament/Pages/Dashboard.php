<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashboardStats;
use App\Filament\Widgets\RecentGraduation;
use App\Filament\Widgets\RecentNews;
use App\Filament\Widgets\RecentSeminar;
use App\Filament\Widgets\UpcomingEvents;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getColumns(): int | array
    {
        return 2;
    }

    public function getWidgets(): array
    {
        return [
            DashboardStats::class,
            UpcomingEvents::class,
            RecentNews::class,
            RecentSeminar::class,
            RecentGraduation::class,
        ];
    }
}
