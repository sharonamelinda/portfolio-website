<?php

namespace App\Filament\Resources\MonthsResource\Pages;

use App\Filament\Resources\MonthsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMonths extends EditRecord
{
    protected static string $resource = MonthsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
