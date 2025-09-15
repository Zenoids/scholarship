<?php

namespace App\Filament\Resources\RenewalStudentResource\Pages;

use App\Filament\Resources\RenewalStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRenewalStudents extends ListRecords
{
    protected static string $resource = RenewalStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
