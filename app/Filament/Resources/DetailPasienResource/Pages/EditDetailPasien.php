<?php

namespace App\Filament\Resources\DetailPasienResource\Pages;

use App\Filament\Resources\DetailPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailPasien extends EditRecord
{
    protected static string $resource = DetailPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
