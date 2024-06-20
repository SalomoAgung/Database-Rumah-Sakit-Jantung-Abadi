<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pasien;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PasienResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PasienResource\RelationManagers;

class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $label = 'Pasien';
    protected static ?string $pluralLabel = 'Pasien';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make() ->schema([
                    TextInput::make('ID_Pasien')->label('ID Pasien')->required()->unique(ignorable: fn ($record) => $record),
                    TextInput::make('Nama_Pasien')->required(),
                    DatePicker::make('TTL_Pasien')->label('TTL Pasien')->required(),
                    TextInput::make('Alamat_Pasien')->required(),
                    Select::make("Gender")->options([
                        "Male" => "Male",
                        "Female" => "Female"
                    ]),
                    TextInput::make('Telp_Pasien')->required()
                ])
                ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("ID_Pasien")->label("ID Pasien")->sortable()->searchable(),
                TextColumn::make("Nama_Pasien")->sortable()->searchable(),
                TextColumn::make("TTL_Pasien")->label("TTL Pasien")->sortable()->searchable(),
                TextColumn::make("Alamat_Pasien")->searchable(),
                TextColumn::make("Gender")->searchable(),
                TextColumn::make("Telp_Pasien")->searchable()
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
            'index' => Pages\ListPasiens::route('/'),
            'create' => Pages\CreatePasien::route('/create'),
            'edit' => Pages\EditPasien::route('/{record}/edit'),
        ];
    }
}
