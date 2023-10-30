<?php

namespace App\Filament\Resources\StateAdminResource\Pages;

use App\Filament\Resources\StateAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStateAdmins extends ListRecords
{
    protected static string $resource = StateAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
