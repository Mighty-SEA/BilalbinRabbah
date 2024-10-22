<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SppResource\Pages;
use App\Filament\Resources\SppResource\RelationManagers;
use App\Models\murid;
use App\Models\Spp;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SppResource extends Resource
{
    protected static ?string $model = Spp::class;
    protected static ?string $navigationLabel = 'SPP';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('nis')
                    ->options(murid::all()->pluck('nama', 'nis'))
                    ->searchable(),
                TextInput::make('uang'),
                TextInput::make('bulan'),
                TextInput::make('tanggal')    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nis'),
                TextColumn::make('murid.nama')->label('nama'),
                TextColumn::make('uang'),
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
            'index' => Pages\ListSpps::route('/'),
            'create' => Pages\CreateSpp::route('/create'),
            'edit' => Pages\EditSpp::route('/{record}/edit'),
        ];
    }
}
