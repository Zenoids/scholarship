<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\StudentResource;
use App\Models\Student;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Actions\Concerns\CanBeHidden;

class StatsOverview extends BaseWidget
{

    protected static ?int $sort=2;
    protected  array|string|int $columnSpan='full';


    protected function getStats(): array
    {
        return [

            Stat::make('Total Students Registered',StudentResource::getEloquentQuery()->count())->description('with in your scope')
            // ->visible((new User())->isMarkazAdmin() || (new User())->isSuperAdmin())
        ];

    }
}
