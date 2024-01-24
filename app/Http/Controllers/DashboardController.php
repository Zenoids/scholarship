<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;


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
    public function exportAllPdf(){
        $query = Student::query();

        // If a volunteer ID is specified, filter the query to fetch only that volunteer's data
        // if ($this->studentid) {
        //     $query->where('id', $this->studentid);
        // }
        // if ($this->records) {
        //     $recordIds = $this->records->pluck('id');
        //     $query->whereIn('id', $recordIds);
        // }
        // dd($query->with('state', 'parliament_seat', 'assembly_constituency')->get());
        // return view('exports.pdf', [
        //     // 'students' => $query->with('state', 'parliament_seat', 'assembly_constituency')->get()

        //     // 'volunteers' => $query->with('state_id', 'seat_id', 'constituency_id')->get()
        // ]);
        $pdf = Pdf::loadView('exports.pdf', ['students' => $query->get()]);
        return $pdf->download('allStudents.pdf');

    }
    public function exportSinglePdf($studentid){
        $query = Student::query();
        $query->where('id', $studentid);
        $pdf = Pdf::loadView('exports.pdf', ['students' => $query->get()]);
        return $pdf->download('student'.$studentid.'.pdf');
    }
    public function exportSelectedPdf($ids){
        $query = Student::query();
        $idArray = explode(',', $ids);
        $records = Student::find($idArray);
        $recordIds = $records->pluck('id');
        $query->whereIn('id', $recordIds);

        if ($records->isEmpty()) {
            abort(404); // or handle the situation when no records are found
        }

        $pdf = Pdf::loadView('exports.pdf', ['students' => $query->get()]);
        return $pdf->download('selected_students.pdf');

    }

}
