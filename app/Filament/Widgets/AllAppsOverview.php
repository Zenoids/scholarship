<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AllAppsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('Total Applications Received',Student::count())
        ];
    }
    public static function canView(): bool
    {
        if ((new User())->isMarkazAdmin() || (new User())->isSuperAdmin()) {
            return true;
        } else {
            return false;
        }
    }
}
