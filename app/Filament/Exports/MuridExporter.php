<?php

namespace App\Filament\Exports;

use App\Models\Murid;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class MuridExporter extends Exporter
{
    protected static ?string $model = Murid::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('nis'),
            ExportColumn::make('nisn'),
            ExportColumn::make('nik'),
            ExportColumn::make('nama'),
            ExportColumn::make('jenis_kelamin'),
            ExportColumn::make('alamat'),
            ExportColumn::make('tempat_lahir'),
            ExportColumn::make('tanggal_lahir'),
            ExportColumn::make('asal_sekolah'),
            ExportColumn::make('kelas'),
            ExportColumn::make('tanggal_masuk'),
            ExportColumn::make('nama_ayah'),
            ExportColumn::make('nama_ibu'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your murid export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
