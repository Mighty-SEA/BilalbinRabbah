<?php

namespace App\Filament\Widgets;

use App\Models\Murid;
use App\Models\Spp;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Murid', Murid::count()),
            Stat::make('Alumni', Murid::where('kelas' , 7)->count()),
            Stat::make('SPP Masuk', 'Rp ' . number_format(Spp::sum('uang'), 0, ',', '.'))        ];
    }
}
