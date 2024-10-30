<?php

namespace App\Filament\Resources\MuridResource\Pages;

use App\Filament\Resources\MuridResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListMurids extends ListRecords
{
    protected static string $resource = MuridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
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
    ];
}
}
