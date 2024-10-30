<?php

namespace App\Filament\Resources;

use App\Filament\Exports\MuridExporter;
use App\Filament\Resources\MuridResource\Pages;
use App\Filament\Resources\MuridResource\RelationManagers;
use App\Models\Murid;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class MuridResource extends Resource
{
    protected static ?string $model = Murid::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Data Murid';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nis'),
                TextInput::make('nisn'),
                TextInput::make('nik'),
                TextInput::make('nama'),
                Select::make('jenis_kelamin')
                ->options([
                    1 => 'Perempuan',
                    0 => 'Laki-Laki',
                ])
                ->required()
                ->placeholder(''),

                TextInput::make('alamat'),
                DatePicker::make('tanggal_lahir'),
                TextInput::make('tempat_lahir'),
                TextInput::make('asal_sekolah'),
                TextInput::make('kelas'),
                DatePicker::make('tanggal_masuk'),
                TextInput::make('nama_ayah'),
                TextInput::make('nama_ibu'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->paginated([10, 25, 50, 100])
            ->columns([
                TextColumn::make('nis')->visibleFrom('md'),
                TextColumn::make('nama'),
                TextColumn::make('kelas'),
                TextColumn::make('jenis_kelamin')
                ->getStateUsing(function ($record) {
                    return $record->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan';
                })->visibleFrom('md'),
                TextColumn::make('kelas')
                ->getStateUsing(function ($record){
                    return $record->kelas == 7 ? 'lulus' : $record->kelas;
                })

            ])
            ->headerActions([
                ExportAction::make()
                    ->exporter(MuridExporter::class)
            ])

            ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),

                BulkAction::make('naikkelas')
                ->label('Naik Kelas')
                ->action(function (Collection $record){
                    $record->each(function ($record){
                        if ($record->kelas < 7 ){
                            $record -> update([
                                'kelas' => $record->kelas + 1,
                            ]);
                        }
                        else {
                            Notification::make()
                                ->title('Sudah Lulus')
                                ->warning()
                                ->send();
                        }
                    });
                })
            ])
            ->recordAction(Tables\Actions\ViewAction::class)
            ->recordUrl(null)
            ->headerActions([
                ExportAction::make()
                    ->exporter(MuridExporter::class)
            ]);;
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
            'index' => Pages\ListMurids::route('/'),
            'create' => Pages\CreateMurid::route('/create'),
            'edit' => Pages\EditMurid::route('/{record}/edit'),
        ];
    }
}
