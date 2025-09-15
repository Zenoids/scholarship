<?php

namespace App\Filament\Resources\RenewalStudentResource\Pages;

use App\Filament\Resources\RenewalStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRenewalStudent extends EditRecord
{
    protected static string $resource = RenewalStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
