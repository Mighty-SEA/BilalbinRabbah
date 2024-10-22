<?php

namespace App\Filament\Resources\Kelas1Resource\Pages;

use App\Filament\Resources\Kelas1Resource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListKelas1s extends ListRecords
{
    protected static string $resource = Kelas1Resource::class;

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'Kelas 1' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '1')),
            'Kelas 2' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('kelas', '2')),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
