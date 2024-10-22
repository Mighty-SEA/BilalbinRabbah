<?php

namespace App\Filament\Resources;
use Illuminate\Support\Collection;
use App\Filament\Resources\MuridResource\Pages;
use App\Filament\Resources\MuridResource\RelationManagers;
use App\Models\Murid;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use App\Filament\Actions\PromoteBulkAction;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Exports\MuridExporter;
use Filament\Tables\Actions\ExportAction;
use Filament\Actions\Exports\Enums\ExportFormat;

class MuridResource extends Resource
{
    protected static ?string $model = Murid::class;
    protected static ?string $navigationLabel = 'Murid';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nis'),
                TextInput::make('nisn'),
                TextInput::make('nik'),
                TextInput::make('nama'),
                TextInput::make('jenis_kelamin'),
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
            ->columns([
                TextColumn::make('nis'),
                TextColumn::make('nisn'),
                TextColumn::make('nik'),
                TextColumn::make('nama'),
                TextColumn::make('kelas'),
                TextColumn::make('jenis_kelamin')

            ])
            ->filters([ // Menambahkan filter berdasarkan kelas
               
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
                BulkAction::make('delete')
            ->requiresConfirmation()
            ->action(fn (Collection $records) => $records->each->delete()),

                BulkAction::make('naikKelas')
                    ->label('Naik Kelas')
                    ->action(function (Collection $records) {
                        $records->each(function ($record) {
                            if ($record->kelas < 7) { // Membatasi maksimal kelas 6
                                $record->update([
                                    'kelas' => $record->kelas + 1,
                                ]);
                            } else {
                                // Opsional: Tambahkan notifikasi jika kelas sudah maksimal
                                Notification::make()
                                    ->title('Sudah Lulus')
                                    ->warning()
                                    ->send();
                            }
                        });
                    })
                    ->requiresConfirmation()
                    ->icon('heroicon-o-arrow-up'),
                
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
            'index' => Pages\ListMurids::route('/'),
            'create' => Pages\CreateMurid::route('/create'),
            'edit' => Pages\EditMurid::route('/{record}/edit'),
        ];
    }
}
