<?php

namespace App\Filament\Widgets;

use App\Models\Office;
use App\Models\Scholarship;
use App\Models\StateAdmin;
use App\Models\Student;
use App\Models\UnitAdmin;
use App\Models\User;
use Filament\Widgets\ChartWidget;

class LatestUnitsChart extends ChartWidget
{
    protected static ?string $heading = 'Latest Applications per Unit';

    protected static ?int $sort=3;

    protected function getData(): array
    {


        $stateAdminId = auth()->user()->id; // Replace with the actual state admin ID you want to retrieve data for

        $unitsData = Student::with('office')
        ->get()
        ->where('scholarship_id', Scholarship::latest()->first()->id)
        // ->pluck('office.state_admin_id')
      ->where('office.state_admin_id', $stateAdminId)
        ->pluck('office.unit_admin_id')
        ->map(function ($unitAdminId) {
            return $unitAdminId ? UnitAdmin::find($unitAdminId)->name : 'Unknown';
        })
        ->groupBy(function ($unitAdminId) {
            return $unitAdminId ?: 'Unknown'; // Grouping by unit_admin_id or Unknown if null
        })
        ->map(function ($units) {

            return $units->count();

        });

    $unitApplications = $unitsData->toArray();








    // Retrieve units associated with the specified state admin


    return [
        'datasets' => [
            [
                'label' => 'Applications received',
                'data' => array_values($unitApplications),
            ],
        ],
        'labels' => array_keys($unitApplications),
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
