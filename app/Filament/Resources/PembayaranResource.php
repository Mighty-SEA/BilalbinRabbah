<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembayaranResource\Pages;
use App\Filament\Resources\PembayaranResource\RelationManagers;
use App\Models\murid;
use App\Models\Pembayaran;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PembayaranResource extends Resource
{
    protected static ?string $model = Pembayaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Select::make('nis')
            ->label('NIS')
            ->options(murid::all()->pluck('nama', 'nis'))
            ->searchable()
            ->placeholder(''),
            Select::make('bulan')
            ->label('Bulan')
            ->options([
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ])
        ->placeholder( ''),
            TextInput::make('tahun'),
            Select::make('jenis')
            ->label('Jenis Pembayaran')
        ->options([
        'Ujian Tengah Semester' => 'Ujian Tengah Semester',
        'Ujian Akhir Semester' => 'Ujian Akhir Semester',
        'Raport' => 'Raport',
        'Daftar Ulang' => 'Daftar Ulang',
         ])
         ->placeholder('Pilih Jenis Pembayaran')
         ->native(false),
            TextInput::make('Uang')
            ->label('Nominal')
            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('nis'),
            TextColumn::make('murid.nama'),
            TextColumn::make('bulan')
            ->label('Bulan')
            ->formatStateUsing(function ($state) {
                return match ($state) {
                    1 => 'Januari',
                    2 => 'Februari',
                    3 => 'Maret',
                    4 => 'April',
                    5 => 'Mei',
                    6 => 'Juni',
                    7 => 'Juli',
                    8 => 'Agustus',
                    9 => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Desember',
                };
            }),
            TextColumn::make('tahun'),
            TextColumn::make('jenis')
            ->label("Jenis Pembayaran"),
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
            'index' => Pages\ListPembayarans::route('/'),
            'create' => Pages\CreatePembayaran::route('/create'),
            'edit' => Pages\EditPembayaran::route('/{record}/edit'),
        ];
    }
}
