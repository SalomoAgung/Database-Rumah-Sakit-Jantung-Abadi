<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Dokter;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DokterResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DokterResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class DokterResource extends Resource
{
    protected static ?string $model = Dokter::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $label = 'Dokter';
    protected static ?string $pluralLabel = 'Dokter';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('ID_Dokter')
                            ->label('ID Dokter')
                            ->required()
                            ->unique()
                            ->maxLength(5),
                        TextInput::make('Nama_Dokter')
                            ->label('Nama Dokter')
                            ->required()
                            ->maxLength(50),
                        DatePicker::make('TTL_Dokter')->required(),
                        TextInput::make('Alamat_Dokter')->required(),
                        Select::make("Gender")->options([
                            "Male" => "Male",
                            "Female" => "Female"
                        ]),
                        TextInput::make('Telp_Dokter')->required()
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_Dokter')
                ->label('ID Dokter')
                ->sortable()
                ->searchable(),
                TextColumn::make("Nama_Dokter")
                ->label('Nama Dokter')
                ->sortable()
                ->searchable(),
                TextColumn::make("TTL_Dokter")
                ->label("TTL Dokter")
                ->sortable()
                ->searchable(),
                TextColumn::make("Alamat_Dokter")
                ->label("Alamat Dokter")
                ->searchable(),
                TextColumn::make("Gender")
                ->searchable(),
                TextColumn::make("Telp_Dokter")
                ->label("Telpon Dokter")
                ->searchable() 
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
            'index' => Pages\ListDokters::route('/'),
            'create' => Pages\CreateDokter::route('/create'),
            'edit' => Pages\EditDokter::route('/{record}/edit'),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            DokterResource\Widgets\DokterOverview::class,
        ];
    }
}
