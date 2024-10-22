<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Kelas1Resource\Pages;
use App\Filament\Resources\Kelas1Resource\RelationManagers;
use App\Models\Kelas1;
use App\Models\murid;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Kelas1Resource extends Resource
{
    protected static ?string $model = Kelas1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('nis')
                    ->options(murid::all()->pluck('nama', 'nis'))
                    ->searchable(),
                Select::make('kelas')
                    ->options([
                        '1' => 'Kelas 1',
                        '2' => 'Kelas 2',
                        '3' => 'Kelas 3',
                        '4' => 'Kelas 4',
                        '5' => 'Kelas 5',
                        '6' => 'Kelas 6',
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nis'),
                TextColumn::make('murid.nama'),
                TextColumn::make('kelas')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelas1s::route('/'),
            'create' => Pages\CreateKelas1::route('/create'),
            'edit' => Pages\EditKelas1::route('/{record}/edit'),
        ];
    }
}
