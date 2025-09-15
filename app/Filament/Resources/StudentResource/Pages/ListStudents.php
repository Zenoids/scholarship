<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected ?string $heading = 'latest scholarship applications';
    // protected static ?string $navigationLabel = 'Latest Applications';

    public static function getNavigationGroup(): ?string
    {
        return 'Student Management';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'eligible-for-renewal' => Pages\EligibleRenewalStudents::route('/eligible-renewal'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'All Students';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::countEligibleForRenewal();
    }


    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
