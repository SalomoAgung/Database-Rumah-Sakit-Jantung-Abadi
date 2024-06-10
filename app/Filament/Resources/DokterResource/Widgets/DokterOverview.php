<?php

namespace App\Filament\Resources\DokterResource\Widgets;

use App\Filament\Resources\DokterResource;
use Filament\Widgets\ChartWidget;

class DokterOverview extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }
    public static function getWidgets(): array
    {
        return [
            DokterResource\Widgets\DokterOverview::class,
        ];
    }
    protected function getType(): string
    {
        return 'bar';
    }
}
