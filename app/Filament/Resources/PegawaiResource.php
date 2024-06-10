<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pegawai;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PegawaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PegawaiResource\RelationManagers;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $label = 'Pegawai';
    protected static ?string $pluralLabel = 'Pegawai';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make() ->schema([
                    TextInput::make('ID_Pegawai')->required()->unique(ignorable: fn ($record) => $record),
                    TextInput::make('Nama')->required(),
                    DatePicker::make('TTL_Pegawai')->required(),
                    TextInput::make('Alamat')->required(),
                    Select::make("Gender")->options([
                        "Male" => "Male",
                        "Female" => "Female"
                    ]),
                    TextInput::make('Telp_Pegawai')->required(),
                    Select::make("Role")->options([
                        "Apoteker" => "Apoteker",
                        "Perawat" => "Perawat"
                    ])
                ])
                ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("id")->label("ID Pegawai")->sortable()->searchable(),
                TextColumn::make("Nama_Pegawai")->sortable()->searchable(),
                TextColumn::make("TTL_Pegawai")->label("TTL Pegawai")->sortable()->searchable(),
                TextColumn::make("Alamat_Pegawai")->searchable(),
                TextColumn::make("Gender")->searchable(),
                TextColumn::make("Telp_Pegawai")->searchable(),
                TextColumn::make("Role_Pegawai")->searchable()
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
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }
}
