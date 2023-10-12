<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\District;
use App\Models\State;
use App\Models\StateAdmin;
use App\Models\Student;
use App\Models\StudentAddress;
use App\Models\Unit;
use App\Models\UnitAdmin;
use Livewire\WithFileUploads;
use Livewire\Component;
use Livewire\Attributes\Rule;


class ScholarshipForm extends Component
{
    use WithFileUploads;

    public $user_id,
    $bank_name,
    $confirm_ac_number,
     $fathers_name,
     $first_name,
     $last_name,
       $d_o_b,
     $gender,
     $religion,
     $mobile,
     $adhaar,
     $orphan_disability,
     $house_number,
     $village_area,
     $tahsil,
     $house_type,
     $district,
     $state,
     $pincode,
     $institute_state,
     $institute_district,
     $institute_locality,
     $institute_name,
     $rank_entrance,
     $course_period,
     $branch_name,
     $course_id,
     $course_year,
     $course_name,
     $previous_course_name,
     $previous_course_subjects,
     $previous_hallticket,
     $previous_course_institution,
     $previous_course_marks,
     $tenth_course_subjects,
     $tenth_hallticket,
     $tenth_course_institution,
     $tenth_course_marks,
     $inter_course_subjects,
     $inter_hallticket,
     $inter_course_institution,
     $inter_course_marks,
     $name_ac_holder,
     $ac_number,
     $ac_branch,
     $ifsc,
     $fathers_occupation,
     $fathers_monthly_income,
     $expense_bearer,
     $expense_bearer_monthly_income,
     $unit_id,
     $district_id,
     $state_id;

    public $currentPage=1;

    #[Rule('required|file|mimes:jpg,jpeg,png,webp,pdf|max:2048')]
    public $photofile;

    #[Rule('required|file|mimes:jpg,jpeg,png,webp,pdf|max:2048')]
    public $feesfile;

    #[Rule('required|file|mimes:jpg,jpeg,png,webp,pdf|max:2048')]
    public $marksfile;

    #[Rule('required|file|mimes:jpg,jpeg,png,webp,pdf|max:2048')]
    public $adhaarfile;

    #[Rule('required|file|mimes:jpg,jpeg,png,webp,pdf|max:2048')]
    public $passbookfile;

    public function addressvalidate() {

        $this->validate([
            'adhaar' => 'required|min:12|unique:students,adhaar',
            'fathers_name' => 'required|min:2',
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'mobile' => 'required|min:10',
            'd_o_b' => 'required',
            'gender' => 'required|in:male,female',
            'religion' => 'required|min:3',
            'orphan_disability' => 'required',
            'house_number' => 'required',
            'house_type' => 'required|in:rented,own',
            'district' => 'required',
            'state' => 'required',
            'pincode' => 'required|min:3',
            'village_area' => 'required',
            ]);

        $this->currentPage++;

    }
    public function educationvalidate(){

          $this->validate([
            // 'course_id' => 'required',
            'course_year' => 'required|min:2',
            'branch_name' => 'required|min:2',
            'course_period' => 'required',
            'rank_entrance' => 'required',
            'institute_name' => 'required|min:3',
            'institute_locality' => 'required',
            'institute_district' => 'required',
            'institute_state' => 'required',
            'previous_course_name' => 'required',
            'previous_hallticket' => 'required',
            'previous_course_subjects' => 'required',
            'previous_course_institution' => 'required|min:3',
            'previous_course_marks' => 'required',
]);
        $this->currentPage++;
    }
    public function incomevalidate(){
          $this->validate([
            'fathers_occupation' => 'required',
            'fathers_monthly_income' => 'required|min:2',
            'expense_bearer' => 'required',
            'expense_bearer_monthly_income' => 'required',
            'name_ac_holder' => 'required',
            'ac_number' => 'required|min:3',
            'bank_name' => 'required|min:2',
            'ac_branch' => 'required',
            'ifsc' => 'required',

            ]);
        $this->currentPage++;
    }
    public function filevalidate(){

        $this->validate();

        $this->currentPage++;
    }

    public function addressreset(){
        $this->reset('adhaar','fathers_name','tahsil','mobile','d_o_b','gender','religion','orphan_disability','house_number','house_type','district','state','pincode','village_area');
    }
    public function educationreset(){
        $this->reset(
        'course_id',
        'course_year',
        'branch_name',
        'course_period',
        'rank_entrance',
        'institute_name',
        'institute_locality',
        'institute_district',
        'institute_state',
        'previous_course_name',
        'previous_course_subjects',
        'previous_course_institution',
        'previous_course_marks',
       'tenth_course_subjects',
       'tenth_hallticket',
       'tenth_course_institution',
       'tenth_course_marks',
       'inter_course_subjects',
       'inter_hallticket',
       'inter_course_institution',
       'inter_course_marks',
    );
    }
    public function incomereset(){
        $this->reset(      'fathers_occupation',
        'fathers_monthly_income',
        'expense_bearer',
        'expense_bearer_monthly_income',
        'name_ac_holder',
        'ac_number',
        'bank_name',
        'ac_branch',
        'ifsc' );
    }
    public function filerest(){
        $this->reset('marksfile','feesfile','adhaarfile','photofile','passbookfile');
    }
    public function goToPage1() {
        $this->currentPage = 1;
    }

    public function goToPage2() {
        $this->currentPage = 2;
    }

    public function goToPage3() {
        $this->currentPage = 3;
    }

    public function goToPage4() {
        $this->currentPage = 4;
    }

    public function backonepage() {
        $this->currentPage--;
    }
    public function finalsubmit(){
        $image_file_path = null;
        $adhaar_file_path = null;
        $fees_file_path = null;
        $marks_file_path = null;
        $passbook_file_path = null;
        if ($this->photofile) {
            $image_file_path = $this->photofile->store('photos');
        }

        if ($this->adhaarfile) {
            $adhaar_file_path = $this->adhaarfile->store('adhaar');
        }

        if ($this->feesfile) {
            $fees_file_path = $this->feesfile->store('fees');
        }

        if ($this->marksfile) {
            $marks_file_path = $this->marksfile->store('marks');
        }
        if ($this->passbookfile) {
            $passbook_file_path = $this->passbookfile->store('passbook');
        }



        $student=Student::create([
            'user_id' => auth()->user()->id,
                'adhaar' =>$this->adhaar,
                'first_name' =>$this->first_name,
                'last_name' =>$this->last_name,
                'fathers_name' =>$this->fathers_name,
                'mobile' =>$this->mobile,
                'd_o_b' =>$this->d_o_b,
                'gender' =>$this->gender,
                'religion' =>$this->religion,
                'orphan_disability' =>$this->orphan_disability,

        ]);

        $student->uploads()->create([
            'image_file_path' =>$image_file_path,
                'fees_file_path' =>$fees_file_path,
                'adhaar_file_path' =>$adhaar_file_path,
                'marks_file_path' =>$marks_file_path,
                'passbook_file_path' =>$passbook_file_path,
        ]);

        $student->addresses()->create([

                'house_number' =>$this->house_number,
                'house_type' =>$this->house_type,
                'district' =>$this->district,
                'state' =>$this->state,
                'pincode' =>$this->pincode,
                'village_area' =>$this->village_area,
        ]);
        $student->educations()->create([
            // 'course_id'=>$this->course_id,
            'course_year'=>$this->course_year,
            'branch_name'=>$this->branch_name,
            'course_period'=>$this->course_period,
            'rank_entrance'=>$this->rank_entrance,
            'institute_name'=>$this->institute_name,
            'institute_locality'=>$this->institute_locality,
            'institute_district'=>$this->institute_district,
            'institute_state'=>$this->institute_state,

        ]);
        $student->previous()->create([
            'previous_course_name'=>$this->previous_course_name,
            'previous_course_subjects'=>$this->previous_course_subjects,
            'previous_hallticket'=>$this->previous_hallticket,
            'previous_course_institution'=>$this->previous_course_institution,
            'previous_course_marks'=>$this->previous_course_marks,
            'tenth_course_subjects'=>$this->tenth_course_subjects,
            'tenth_hallticket'=>$this->tenth_hallticket,
            'tenth_course_institution'=>$this->tenth_course_institution,
            'tenth_course_marks'=>$this->tenth_course_marks,
            'inter_course_subjects'=>$this->inter_course_subjects,
            'inter_hallticket'=>$this->inter_hallticket,
            'inter_course_institution'=>$this->inter_course_institution,
            'inter_course_marks'=>$this->inter_course_marks,


           ]);
        $student->incomes()->create([
            'name_ac_holder'=>$this->name_ac_holder,
            'ac_number'=>$this->ac_number,
            'bank_name'=>$this->bank_name,
            'ac_branch'=>$this->ac_branch,
            'ifsc'=>$this->ifsc,
            'fathers_monthly_income'=>$this->fathers_monthly_income,
            'fathers_occupation'=>$this->fathers_occupation,
            'expense_bearer'=>$this->expense_bearer,
            'expense_bearer_monthly_income'=>$this->expense_bearer_monthly_income,
           ]);
        //    $student->offices()->create([
        //     'state_admin_id'=>$this->state_admin_id,
        //     'unit_admin_id'=>$this->unit_admin_id,
        //    ]);

           $this->redirect(
            '/'
        );

    }


    public function render()
    {
        $courses=Course::all();
        $states=StateAdmin::all();
        // $districts=District::all();
        $units=UnitAdmin::all();

        // dd($this->currentPage);
        return view('livewire.scholarship-form',['courses'=>$courses,'states'=>$states,'units'=>$units]);
    }
}

