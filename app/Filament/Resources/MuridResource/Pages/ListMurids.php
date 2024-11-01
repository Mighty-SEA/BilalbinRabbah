<?php

namespace App\Filament\Resources\MuridResource\Pages;

use App\Filament\Resources\MuridResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Imports\MuridImport;
use Filament\Actions\Action as ActionsAction;
// Import yang dibutuhkan
use Filament\Resources\Resource;
use Filament\Pages\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Notifications\Notification;
class ListMurids extends ListRecords
{
    protected static string $resource = MuridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ActionsAction::make('import')
                ->label('Import Murid')
                ->icon('heroicon-o-document-arrow-up') // Ganti ikon yang tersedia
                ->modalHeading('Import Data Murid dari Excel')
                ->modalButton('Import')
                ->form([
                    FileUpload::make('file')
                        ->label('Pilih File Excel')
                        ->required()
                        ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel']),
                ])
                ->action(function (array $data): void {
                    try {
                        Excel::import(new MuridImport, $data['file']);
                        Notification::make()
                            ->title('Import Berhasil')
                            ->success()
                            ->send();
                    } catch (\Exception $e) {
                        Notification::make()
                            ->title('Import Gagal')
                            ->danger()
                            ->body('Pastikan format file Excel sesuai dengan format data yang diharapkan.')
                            ->send();
                    }
                }),
        ];


    }

    public function getTabs(): array
    {
        return [
            'Semua Kelas' => Tab::make(),
            'Kelas 1' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '1')),
            'Kelas 2' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '2')),
            'Kelas 3' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '3')),
            'Kelas 4' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '4')),
            'Kelas 5' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '5')),
            'Kelas 6' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '6')),
            'Alumni' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '7')),
        ];
    }

}
