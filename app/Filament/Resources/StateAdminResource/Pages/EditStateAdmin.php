<?php

namespace App\Filament\Resources\StateAdminResource\Pages;

use App\Filament\Resources\StateAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStateAdmin extends EditRecord
{
    protected static string $resource = StateAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
