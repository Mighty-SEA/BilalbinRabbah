<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelajaranResource\Pages;
use App\Filament\Resources\PelajaranResource\RelationManagers;
use App\Models\Pelajaran;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelajaranResource extends Resource
{
    protected static ?string $model = Pelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_pelajaran'),
                TextInput::make('nama_pelajaran'),
                TextInput::make('tahun')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pelajaran'),
                TextColumn::make('nama_pelajaran')->label('pelajaran'),
                TextColumn::make('tahun')
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
            'index' => Pages\ListPelajarans::route('/'),
            'create' => Pages\CreatePelajaran::route('/create'),
            'edit' => Pages\EditPelajaran::route('/{record}/edit'),
        ];
    }
}
