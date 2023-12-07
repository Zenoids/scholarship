<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    //
    public function exportAll(){
        return Excel::download(new StudentsExport, 'all_applications.xlsx');

    }
    public function exportSingle($studentid){
        return Excel::download(new StudentsExport($studentid), 'student' . $studentid . '.xlsx');
    }
    public function exportSelected($ids){
        $idArray = explode(',', $ids);
        $records = Student::find($idArray);

        if ($records->isEmpty()) {
            abort(404); // or handle the situation when no records are found
        }

        return Excel::download(new StudentsExport(null,$records), 'selected_applicants.xlsx');

    }

}
