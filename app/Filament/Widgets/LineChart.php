<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Murid; // Pastikan model Murid sudah ada

class LineChart extends ChartWidget
{
    protected static ?string $heading = 'Murid';

    protected function getData(): array
    {
        // Ambil jumlah murid berdasarkan tahun pendaftaran
        $data = Murid::selectRaw('YEAR(created_at) as year, COUNT(*) as total')
            ->groupBy('year')
            ->orderBy('year')
            ->pluck('total', 'year')
            ->toArray();

        // Pastikan setiap tahun memiliki data, jika tidak, isi dengan 0
        $years = ['2021', '2022', '2023', '2024'];
        $counts = [];
        foreach ($years as $year) {
            $counts[] = $data[$year] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Murid Per Tahun',
                    'data' => $counts,
                ],
            ],
            'labels' => $years,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
