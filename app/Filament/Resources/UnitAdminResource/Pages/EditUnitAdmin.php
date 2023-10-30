<?php

namespace App\Filament\Resources\UnitAdminResource\Pages;

use App\Filament\Resources\UnitAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnitAdmin extends EditRecord
{
    protected static string $resource = UnitAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
