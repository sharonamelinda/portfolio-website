<?php

namespace App\Filament\Resources\MonthsResource\Pages;

use App\Filament\Resources\MonthsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMonths extends ListRecords
{
    protected static string $resource = MonthsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
