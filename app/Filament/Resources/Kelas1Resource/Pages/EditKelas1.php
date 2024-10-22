<?php

namespace App\Filament\Resources\Kelas1Resource\Pages;

use App\Filament\Resources\Kelas1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelas1 extends EditRecord
{
    protected static string $resource = Kelas1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
