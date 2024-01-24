{{-- <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Student id: </th>
            <th>user id: </th>
            <th>JIH State </th>
            <th>JIH Unit</th>
            <th>First Name: </th>
            <th>Last Name: </th>
            <th>Fathers Name: </th>
            <th>Date of birth: </th>
            <th>Gender: </th>
            <th>Religion: </th>
            <th>Mobile: </th>
            <th>Adhaar: </th>
            <th>Orphan Disability: </th>
            <th>house_number: </th>
            <th>tahsil: </th>
            <th>district: </th>
            <th>state: </th>
            <th>pincode: </th>
            <th>village_area: </th>
            <th>Course Name: </th>
            <th>course_year: </th>
            <th>branch_name: </th>
            <th>course_period: </th>
            <th>rank_entrance: </th>
            <th>institute_name: </th>
            <th>institute_locality: </th>
            <th>institute_district: </th>
            <th>institute_state: </th>
            <th>previous_course_name: </th>
            <th>previous_course_subjects: </th>
            <th>previous_hallticket: </th>
            <th>previous_course_institution: </th>
            <th>previous_course_marks: </th>
            <th>tenth_subjects: </th>
            <th>tenth_hallticket: </th>
            <th>tenth_institution: </th>
            <th>tenth_marks: </th>
            <th>inter_subjects: </th>
            <th>inter_hallticket: </th>
            <th>inter_institution: </th>
            <th>inter_marks: </th>
            <th>name_ac_holder: </th>
            <th>bank_name: </th>
            <th>ac_branch: </th>
            <th>ac_number: </th>
            <th>ifsc: </th>
            <th>fathers_occupation: </th>
            <th>fathers_monthly_income: </th>
            <th>expense_bearer: </th>
            <th>expense_bearer_monthly_income: </th>
            <th>Image: </th>
            <th>fees_file_path: </th>
            <th>adhaar_file_path: </th>
            <th>marks_file_path: </th>
            <th>passbook_file_path: </th> --}}

{{-- <th scope="col">Download</th> --}}
{{-- </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->user_id}}</td>
                <td>{{$student->office->stateAdmin->name??""}}</td>
                <td>{{$student->office->unitAdmin->name??""}}</td>
                <td>{{$student->first_name??""}}</td>
                <td>{{$student->last_name??""}}</td>
                <td>{{$student->fathers_name??""}}</td>
                <td>{{$student->d_o_b??""}}</td>
                <td>{{$student->gender??""}}</td>
                <td>{{$student->religion??""}}</td>
                <td>{{$student->mobile??""}}</td>
                <td>{{$student->adhaar??""}}</td>
                <td>{{$student->orphan_disability??""}}</td>
                <td>{{ $student->addresses->house_number??""}}</td>
                <td>{{ $student->addresses->tahsil??""}}</td>
                <td>{{ $student->addresses->district??""}}</td>
                <td>{{ $student->addresses->state??""}}</td>
                <td>{{ $student->addresses->pincode??""}}</td>
                <td>{{ $student->addresses->village_area??""}}</td>
                <td>{{ $student->educations->course->name??""}}</td>
                <td>{{ $student->educations->course_year??""}}</td>
                <td>{{ $student->educations->branch_name??""}}</td>
                <td>{{ $student->educations->course_period??""}}</td>
                <td>{{ $student->educations->rank_entrance??""}}</td>
                <td>{{ $student->educations->institute_name??""}}</td>
                <td>{{ $student->educations->institute_locality??""}}</td>
                <td>{{ $student->educations->institute_district??""}}</td>
                <td>{{ $student->educations->institute_state??""}}</td>
                <td>{{ $student->previous->previous_course_name??""}}</td>
                <td>{{ $student->previous->previous_course_subjects??""}}</td>
                <td>{{ $student->previous->previous_hallticket??""}}</td>
                <td>{{ $student->previous->previous_course_institution??""}}</td>
                <td>{{ $student->previous->previous_course_marks??""}}</td>
                <td>{{ $student->previous->tenth_subjects??""}}</td>
                <td>{{ $student->previous->tenth_hallticket??""}}</td>
                <td>{{ $student->previous->tenth_institution??""}}</td>
                <td>{{ $student->previous->tenth_marks??""}}</td>
                <td>{{ $student->previous->inter_subjects??""}}</td>
                <td>{{ $student->previous->inter_hallticket??""}}</td>
                <td>{{ $student->previous->inter_institution??""}}</td>
                <td>{{ $student->previous->inter_marks??""}}</td>
                <td>{{ $student->incomes->name_ac_holder??""}}</td>
                <td>{{ $student->incomes->bank_name??""}}</td>
                <td>{{ $student->incomes->ac_branch??""}}</td>
                <td>{{ $student->incomes->ac_number??""}}</td>
                <td>{{ $student->incomes->ifsc??""}}</td>
                <td>{{ $student->incomes->fathers_occupation??""}}</td>
                <td>{{ $student->incomes->fathers_monthly_income??""}}</td>
                <td>{{ $student->incomes->expense_bearer??""}}</td>
                <td>{{ $student->incomes->expense_bearer_monthly_income??""}}</td>

                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->image_file_path ?? '#')) }}">View File</a></td>
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->fees_file_path ?? '#')) }}">View File</a></td>
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->adhaar_file_path ?? '#')) }}">View File</a></td>
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->marks_file_path ?? '#')) }}">View File</a></td>
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->passbook_file_path ?? '#')) }}">View File</a></td>

            </tr>
        @endforeach
    </tbody>
</table> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Download</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .row {
            display: flex;
        }

        .col {
            flex: 1;
            margin: 10px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    @foreach ($students as $student)
        <div class=" ">
            <h1 class="text-center">JIH Scholarship</h1>
            <h2 class="text-center">Applicant:{{ $student->first_name . $student->last_name }} </h2>
            <div class="row">

                <div class="col-6">
                    <h4>Personal Details</h4>
                    <ul class="list-group list-group-flush">
                        <x-pdf-list key="Student id" :value="$student->id" />
                        <x-pdf-list key="user id" :value="$student->user_id" />
                        <x-pdf-list key="JIH Stat" :value="$student->office->stateAdmin->name ?? '-'" />
                        <x-pdf-list key="JIH Un" :value="$student->office->unitAdmin->name ?? '-'" />
                        <x-pdf-list key="First Name" :value="$student->first_name ?? '-'" />
                        <x-pdf-list key="Last Name" :value="$student->last_name ?? '-'" />
                        <x-pdf-list key="Fathers Name" :value="$student->fathers_name ?? '-'" />
                        <x-pdf-list key="Date of birth" :value="$student->d_o_b ?? '-'" />
                        <x-pdf-list key="Gender" :value="$student->gender ?? '-'" />
                        <x-pdf-list key="Religion" :value="$student->religion ?? '-'" />
                        <x-pdf-list key="Mobile" :value="$student->mobile ?? '-'" />
                        <x-pdf-list key="Adhaar" :value="$student->adhaar ?? '-'" />
                        <x-pdf-list key="Orphan Disability" :value="$student->orphan_disability ?? '-'" />
                    </ul>
                    <hr>
                    <h4>Address Details</h4>
                    <ul class="list-group list-group-flush">
                        <x-pdf-list key="house_number" :value="$student->addresses->house_number ?? '-'" />
                        <x-pdf-list key="tahsil" :value="$student->addresses->tahsil ?? '-'" />
                        <x-pdf-list key="district" :value="$student->addresses->district ?? '-'" />
                        <x-pdf-list key="state" :value="$student->addresses->state ?? '-'" />
                        <x-pdf-list key="pincode" :value="$student->addresses->pincode ?? '-'" />
                        <x-pdf-list key="village_area" :value="$student->addresses->village_area ?? '-'" />
                    </ul>
                    <hr>
                    <h4>Bank Details</h4>
                    <ul class="list-group list-group-flush">
                        <x-pdf-list key="name_ac_holder" :value="$student->incomes->name_ac_holder ?? '-'" />
                        <x-pdf-list key="bank_name" :value="$student->incomes->bank_name ?? '-'" />
                        <x-pdf-list key="ac_branch" :value="$student->incomes->ac_branch ?? '-'" />
                        <x-pdf-list key="ac_number" :value="$student->incomes->ac_number ?? '-'" />
                        <x-pdf-list key="ifsc" :value="$student->incomes->ifsc ?? '-'" />
                    </ul>
                </div>
                <div class="col-6">
                    <h4>Education Details</h4>
                    <ul class="list-group list-group-flush">
                        <x-pdf-list key="Course Name" :value="$student->educations->course->name ?? '-'" />
                        <x-pdf-list key="course_year" :value="$student->educations->course_year ?? '-'" />
                        <x-pdf-list key="branch_name" :value="$student->educations->branch_name ?? '-'" />
                        <x-pdf-list key="course_period" :value="$student->educations->course_period ?? '-'" />
                        <x-pdf-list key="rank_entrance" :value="$student->educations->rank_entrance ?? '-'" />
                        <x-pdf-list key="institute_name" :value="$student->educations->institute_name ?? '-'" />
                        <x-pdf-list key="institute_locality" :value="$student->educations->institute_locality ?? '-'" />
                        <x-pdf-list key="institute_district" :value="$student->educations->institute_district ?? '-'" />
                        <x-pdf-list key="institute_state" :value="$student->educations->institute_state ?? '-'" />
                        <x-pdf-list key="previous_course_name" :value="$student->previous->previous_course_name ?? '-'" />
                        <x-pdf-list key="previous_course_subjects" :value="$student->previous->previous_course_subjects ?? '-'" />
                        <x-pdf-list key="previous_hallticket" :value="$student->previous->previous_hallticket ?? '-'" />
                        <x-pdf-list key="previous_course_institution" :value="$student->previous->previous_course_institution ?? '-'" />
                        <x-pdf-list key="previous_course_marks" :value="$student->previous->previous_course_marks ?? '-'" />
                        <x-pdf-list key="tenth_subjects" :value="$student->previous->tenth_subjects ?? '-'" />
                        <x-pdf-list key="tenth_hallticket" :value="$student->previous->tenth_hallticket ?? '-'" />
                        <x-pdf-list key="tenth_institution" :value="$student->previous->tenth_institution ?? '-'" />
                        <x-pdf-list key="tenth_marks" :value="$student->previous->tenth_marks ?? '-'" />
                        <x-pdf-list key="inter_subjects" :value="$student->previous->inter_subjects ?? '-'" />
                        <x-pdf-list key="inter_hallticket" :value="$student->previous->inter_hallticket ?? '-'" />
                        <x-pdf-list key="inter_institution" :value="$student->previous->inter_institution ?? '-'" />
                        <x-pdf-list key="inter_marks" :value="$student->previous->inter_marks ?? '-'" />
                    </ul>
                    <hr>
                    <h4>Income Details</h4>
                    <ul class="list-group list-group-flush">
                        <x-pdf-list key="fathers_occupation" :value="$student->incomes->fathers_occupation ?? '-'" />
                        <x-pdf-list key="fathers_monthly_income" :value="$student->incomes->fathers_monthly_income ?? '-'" />
                        <x-pdf-list key="expense_bearer" :value="$student->incomes->expense_bearer ?? '-'" />
                        <x-pdf-list key="expense_bearer_monthly_income" :value="$student->incomes->expense_bearer_monthly_income ?? '-'" />
                    </ul>
                    <h4>Student Uploads</h4>
                    <ul class="list-group list-group-flush">
                        <x-pdf-list key="Image Uploaded:" :value="asset('storage/' . ($student->uploads->image_file_path ?? '#'))" />
                        <x-pdf-list key="Fees File:" :value="asset('storage/' . ($student->uploads->fees_file_path ?? '#'))" />
                        <x-pdf-list key="Adhaar File:" :value="asset('storage/' . ($student->uploads->adhaar_file_path ?? '#'))" />
                        <x-pdf-list key="Marks File:" :value="asset('storage/' . ($student->uploads->marks_file_path ?? '#'))" />
                        <x-pdf-list key="Passbook File:" :value="asset('storage/' . ($student->uploads->passbook_file_path ?? '#'))" />

                    </ul>

                </div>
            </div>
    @endforeach
    <div class="page-break"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>
{{--
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->image_file_path ?? '#')) ">View File</a>
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->fees_file_path ?? '#')) ">View File</a>
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->adhaar_file_path ?? '#')) ">View File</a></td>
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->marks_file_path ?? '#')) ">View File</a></td>
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->passbook_file_path ?? '#')) ">View File</a></td>
 --}}




<title>Document</title>
</head>
