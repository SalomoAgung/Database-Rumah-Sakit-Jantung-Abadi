<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DetailPasien;
use App\Models\Detail_Pasien;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DetailPasienResource\Pages;
use App\Filament\Resources\DetailPasienResource\RelationManagers;

class DetailPasienResource extends Resource
{
    protected static ?string $model = Detail_Pasien::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static ?string $label = 'Detail Pasien';
    protected static ?string $pluralLabel = 'Detail Pasien';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make() ->schema([
                    TextInput::make('ID_Detail_Pasien')->label('ID Detail Pasien')->required()->unique(ignorable: fn ($record) => $record),
                    TextInput::make('ID_Pasien')->label('ID Pasien')->required(),
                    TextInput::make('ID_Dokter')->label('ID Dokter')->required(),
                    TextInput::make('Tekanan_Darah')->required(),
                    TextInput::make('Detak_Jantung')->required(),
                    TextInput::make('Gula_Darah')->required(),
                    TextInput::make('ID_Penyakit')->label('ID Penyakit')->required(),
                ])
                ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_Detail_Pasien')
                    ->label('ID Detail Pasien')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ID_Dokter')
                    ->label('ID Dokter')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ID_Pasien')
                    ->label('ID Pasien')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Tekanan_Darah')
                    ->label('Tekanan Darah')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Detak_Jantung')
                    ->label('Detak Jantung')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Gula_Darah')
                    ->label('Gula Darah')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ID_Penyakit')
                    ->label('ID Penyakit')
                    ->sortable()
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDetailPasiens::route('/'),
            'create' => Pages\CreateDetailPasien::route('/create'),
            'edit' => Pages\EditDetailPasien::route('/{record}/edit'),
        ];
    }
}
