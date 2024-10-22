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
    protected static ?string $title = 'Custom Page Title';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
