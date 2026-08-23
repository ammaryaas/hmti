<?php

namespace App\Filament\Widgets;

use App\Models\Appreciation;
use App\Models\Cabinet;
use App\Models\DataCenter;
use App\Models\Event;
use App\Models\Mahasiswa;
use App\Models\News;
use App\Models\Seminar;
use App\Models\StudentInfo;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $activeCabinet = Cabinet::where('status', 'active')->first();
        $totalMahasiswa = Mahasiswa::count();
        $totalNews = News::where('status', 'published')->count();
        $totalEvents = Event::where('is_published', true)->count();
        $totalAppreciation = Appreciation::count();
        $totalViews = DataCenter::sum('views') + StudentInfo::sum('views');

        return [
            Stat::make('Mahasiswa Terdaftar', $totalMahasiswa)
                ->description(Seminar::count() . ' seminar terdaftar')
                ->descriptionIcon(Heroicon::UserGroup)
                ->color('info'),

            Stat::make('Kabinet Aktif', $activeCabinet?->name ?? 'Belum ada')
                ->description($activeCabinet ? 'Periode ' . $activeCabinet->period : 'Nonaktif')
                ->descriptionIcon(Heroicon::BuildingLibrary)
                ->color($activeCabinet ? 'success' : 'gray'),

            Stat::make('Konten Corner', $totalNews + $totalEvents + $totalAppreciation)
                ->description("{$totalNews} Berita · {$totalEvents} Event · {$totalAppreciation} Prestasi")
                ->descriptionIcon(Heroicon::Newspaper)
                ->color('primary'),

            Stat::make('Akses Link & Info', number_format($totalViews) . ' klik')
                ->description(DataCenter::count() . ' data center · ' . StudentInfo::count() . ' info')
                ->descriptionIcon(Heroicon::CursorArrowRays)
                ->color('warning'),
        ];
    }
}
