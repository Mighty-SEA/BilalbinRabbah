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
use Filament\Forms\Components\Section;

class PelajaranResource extends Resource
{
    protected static ?string $model = Pelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Pelajaran Details') // You can give a title to the section
                    ->columns([
                        'sm' => 3,
                        'xl' => 6,
                        '2xl' => 8,
                    ])
                    ->schema([
                        TextInput::make('kode_pelajaran')
                            ->columnSpan([
                                'sm' => 4,
                                'xl' => 3,
                                '2xl' => 2,
                            ]),
                        TextInput::make('nama_pelajaran')
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 3,
                                '2xl' => 2,
                            ]),
                        TextInput::make('tahun')
                            ->columnSpan([
                                'sm' => 4,
                                'xl' => 3,
                                '2xl' => 2,
                            ]),
                    ]),
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
