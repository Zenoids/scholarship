<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\StudentResource;
use App\Models\Student;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class StatsOverview extends BaseWidget
{



    protected static ?int $sort=2;
    protected  array|string|int $columnSpan='full';


    protected function getStats(): array
    {
        return [

            Stat::make('Students Registered',StudentResource::getEloquentQuery()->count())->description('Latest applications received with in your scope')
        ];

    }

}
