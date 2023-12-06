<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;


class ExportController extends Controller
{
    //
    public function exportSinglePdf($applicantid)
    {
        $query = Student::query();
        if ($applicantid) {
            $query->where('id', $applicantid);
        }
        $data=$applicantid;
        $pdf=FacadePdf::loadView('exports.onestudent',$query->get());
        return $pdf->download($applicantid->name   .'.pdf');
    }


}
