<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class StudentsExport implements FromView
{
    protected $studentid;
    protected $records;
    public function __construct($studentid = null, $records=null)
    {
        $this->studentid = $studentid;
        $this->records = $records;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $query = Student::query();

        // If a volunteer ID is specified, filter the query to fetch only that volunteer's data
        if ($this->studentid) {
            $query->where('id', $this->studentid);
        }
        if ($this->records) {
            $recordIds = $this->records->pluck('id');
            $query->whereIn('id', $recordIds);
        }
        // dd($query->with('state', 'parliament_seat', 'assembly_constituency')->get());
        return view('exports.students', [
            // 'students' => $query->with('state', 'parliament_seat', 'assembly_constituency')->get()
            'students' => $query->with(['units','states','addresses','incomes','educations','previous','uploads','user','verify','office','comments', 'scholarship'])->get()
            // 'volunteers' => $query->with('state_id', 'seat_id', 'constituency_id')->get()
        ]);
    }
}
