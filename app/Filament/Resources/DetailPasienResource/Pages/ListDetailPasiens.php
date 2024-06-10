<?php

namespace App\Filament\Resources\DetailPasienResource\Pages;

use App\Filament\Resources\DetailPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailPasiens extends ListRecords
{
    protected static string $resource = DetailPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
