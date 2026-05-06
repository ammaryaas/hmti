<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\RecentGraduation;
use App\Filament\Widgets\RecentSeminar;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\TotalCorner;

class Dashboard extends BaseDashboard
{
    protected string $view = 'filament.pages.dashboard';

    public function getHeaderWidgets(): array
    {
        return [
            TotalCorner::class,
            RecentSeminar::class,
            RecentGraduation::class,
        ];
    }
}
