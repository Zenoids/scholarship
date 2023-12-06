{{-- @dd($record->) --}}


<h1>Applicant details for scholarship 2023 oct-15 to nov-15</h1>

    <h2>Personal details</h2>
<div>id: {{$record->id}}</div>
<div>user id: {{$record->user_id}}</div>
<div>First Name: {{$record->first_name}}</div>
<div>Last Name: {{$record->last_name}}</div>
<div>Fathers Name: {{$record->fathers_name}}</div>
<div>Date of birth: {{$record->d_o_b}}</div>
<div>Gender: {{$record->gender}}</div>
<div>Religion: {{$record->religion}}</div>
<div>Mobile: {{$record->mobile}}</div>
<div>Adhaar: {{$record->adhaar}}</div>
<div>Orphan Disability: {{$record->orphan_disability}}</div>
<hr>


<h2>Address Details</h2>
<div>house_number: {{ $record->addresses->house_number}}</div>
<div>tahsil: {{ $record->addresses->tahsil}}</div>
<div>district: {{ $record->addresses->district}}</div>
<div>state: {{ $record->addresses->state}}</div>
<div>pincode: {{ $record->addresses->pincode}}</div>
<div>village_area: {{ $record->addresses->village_area}}</div>
<div>name: {{ $record->office->stateAdmin->name}}</div>
<div>name: {{ $record->office->unitAdmin->name}}</div>
<hr>

<h2>Education Details</h2>

<div>Course Name: {{ $record->educations->course->name}}</div>
<div>course_year: {{ $record->educations->course_year}}</div>
<div>branch_name: {{ $record->educations->branch_name}}</div>
<div>course_period: {{ $record->educations->course_period}}</div>
<div>rank_entrance: {{ $record->educations->rank_entrance}}</div>
<div>institute_name: {{ $record->educations->institute_name}}</div>
<div>institute_locality: {{ $record->educations->institute_locality}}</div>
<div>institute_district: {{ $record->educations->institute_district}}</div>
<div>institute_state: {{ $record->educations->institute_state}}</div>
<hr>

<h2> Previous Education Details</h2>
<div>previous_course_name: {{ $record->previous->previous_course_name}}</div>
<div>previous_course_subjects: {{ $record->previous->previous_course_subjects}}</div>
<div>previous_hallticket: {{ $record->previous->previous_hallticket}}</div>
<div>previous_course_institution: {{ $record->previous->previous_course_institution}}</div>
<div>previous_course_marks: {{ $record->previous->previous_course_marks}}</div>
<div>tenth_subjects: {{ $record->previous->tenth_subjects}}</div>
<div>tenth_hallticket: {{ $record->previous->tenth_hallticket}}</div>
<div>tenth_institution: {{ $record->previous->tenth_institution}}</div>
<div>tenth_marks: {{ $record->previous->tenth_marks}}</div>
<div>inter_subjects: {{ $record->previous->inter_subjects}}</div>
<div>inter_hallticket: {{ $record->previous->inter_hallticket}}</div>
<div>inter_institution: {{ $record->previous->inter_institution}}</div>
<div>inter_marks: {{ $record->previous->inter_marks}}</div>
<hr>

<h2>Bank & Income Details</h2>
<div>name_ac_holder: {{ $record->incomes->name_ac_holder}}</div>
<div>bank_name: {{ $record->incomes->bank_name}}</div>
<div>ac_branch: {{ $record->incomes->ac_branch}}</div>
<div>ac_number: {{ $record->incomes->ac_number}}</div>
<div>ifsc: {{ $record->incomes->ifsc}}</div>
<div>fathers_occupation: {{ $record->incomes->fathers_occupation}}</div>
<div>fathers_monthly_income: {{ $record->incomes->fathers_monthly_income}}</div>
<div>expense_bearer: {{ $record->incomes->expense_bearer}}</div>
<div>expense_bearer_monthly_income: {{ $record->incomes->expense_bearer_monthly_income}}</div>
<hr>

<h2> Uploads</h2>
{{-- <img src="{!!$record->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}">


<img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate('Make me into an QrCode!')) }} ">
{{QrCode::generate('Make me into a QrCode!');}}

<div class="visible-print">{!! QrCode::size(100)->generate(Request::url($record->uploads->image_file_path)); !!}</div>
<div>Image: {{ QrCode::generate("Make me into a QrCode")}}</div>
<div>fees_file_path: {{ QrCode::generate($record->uploads->fees_file_path)}}</div>
<div>adhaar_file_path: {{ QrCode::generate($record->uploads->adhaar_file_path)}}</div>
<div>marks_file_path: {{ QrCode::generate($record->uploads->marks_file_path)}}</div>
<div>passbook_file_path: {{ QrCode::generate($record->uploads->passbook_file_path)}}</div>

<img src="{!!$record->embedData(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}"> --}}




<div>Image: {{ $record->uploads->image_file_path}}</div>
<div>fees_file_path: {{ $record->uploads->fees_file_path}}</div>
<div>adhaar_file_path: {{ $record->uploads->adhaar_file_path}}</div>
<div>marks_file_path: {{ $record->uploads->marks_file_path}}</div>
<div>passbook_file_path: {{ $record->uploads->passbook_file_path}}</div>
<hr>
