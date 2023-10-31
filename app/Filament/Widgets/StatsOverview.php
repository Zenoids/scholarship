<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort=2;
    // protected  array|string|int $columnSpan='full';


    protected function getStats(): array
    {
        return [

            Stat::make('Total Students Registered',Student::count())
        ];
    }
}
