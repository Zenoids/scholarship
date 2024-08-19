<?php

namespace App\Filament\Widgets;

use App\Models\Scholarship;
use App\Models\StateAdmin;
use App\Models\Student;
use App\Models\User;
use Filament\Widgets\ChartWidget;

class LatestStatesChart extends ChartWidget
{
    protected static ?string $heading = 'State wise Latest-Applications recieved';
    protected static ?int $sort=3;
    protected  array|string|int $columnSpan='full';

    protected function getData(): array
    {
        $statesData = Student::with('office')
        ->get()
        ->where('scholarship_id', Scholarship::latest()->first()->id)
        ->pluck('office.state_admin_id')
        ->map(function ($stateAdminId) {
            return $stateAdminId ? StateAdmin::find($stateAdminId)->name : 'Unknown';
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

    // private function getStudentsPerState():array
    // {

    // }
    public static function canView(): bool
    {
        if ((new User())->isMarkazAdmin() || (new User())->isSuperAdmin()) {
            return true;
        } else {
            return false;
        }
    }
}
