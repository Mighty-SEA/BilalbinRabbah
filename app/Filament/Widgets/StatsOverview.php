<?php

namespace App\Filament\Widgets;

use App\Models\Murid;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
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
            Stat::make('SPP Masuk', 'Rp ' . number_format(Spp::sum('uang'), 0, ',', '.')),
            Stat::make('Pemasukan', 'Rp ' . number_format(Pemasukan::sum('uang'), 0, ',', '.')),
            Stat::make('Pengeluaran', 'Rp ' . number_format(Pengeluaran::sum('uang'), 0, ',', '.')),
            Stat::make('Sisa', 'Rp ' . number_format(
                Spp::sum('uang') + Pemasukan::sum('uang') - Pengeluaran::sum('uang'), 0, ',', '.'
            )),




        ];

    }
}
