<?php

namespace App\Filament\Widgets;

use App\Models\StateAdmin;
use App\Models\Student;
use App\Models\UnitAdmin;
use App\Models\User;
use Filament\Widgets\ChartWidget;

class UnitsChart extends ChartWidget
{
    protected static ?string $heading = 'Applications per Unit';

    protected static ?int $sort=3;

    protected function getData(): array
    {
        $statesData = Student::with('office')
        ->get()
        ->pluck('office.unit_admin_id')
        ->map(function ($stateAdminId) {
            return $stateAdminId ? UnitAdmin::find($stateAdminId)->name : 'Unknown';
        })
        ->groupBy(function ($stateAdminId) {
            return $stateAdminId ?: 'Unknown'; // Grouping by state_admin_id or Unknown if null
        })
        ->map(function ($students) {
            return $students->count();
        });

    $stateApplications = $statesData->toArray();

    return [
        'datasets' => [
            [
                'label' => 'Applications received',
                'data' => array_values($stateApplications),
            ],
        ],
        'labels' => array_keys($stateApplications),
    ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    public static function canView(): bool
    {
        if ((new User())->isStateAdmin()) {
            return true;
        } else {
            return false;
        }
    }
}
