<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Download</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }

        ul {
            list-style-type: none;
        }

        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    @foreach ($students as $key => $student)
        <div class=" container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    <img src="logo.png" width="150px" height="60px" alt="JIH logo">
                </div>
                <h2 class="col-xs-9">JIH Scholarship Application Form</h2>
                {{-- <h5 class="text-center">Applicant:{{ $student->first_name . $student->last_name }} </h5> --}}
            </div>

            <div class="row">

                <div class="col-xs-4">
                    <h4>Personal Details</h4>
                    <ul class="list-group">

                        <li class="list-group-item-text" >
                            <span class="text-left"><b>APPLICATION ID:</b></span>

                            <span class="text-right"><b>
                                {{$student->id}}
                                </b>
                            </span>
                        </li>

                        <x-pdf-list key="User id" :value="$student->user_id" />
                        <x-pdf-list key="JIH State" :value="$student->office->stateAdmin->name ?? '-'" />
                        <x-pdf-list key="JIH Unit" :value="$student->office->unitAdmin->name ?? '-'" />
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
                    {{-- <hr> --}}
                    <h4>Address Details</h4>
                    <ul class="list-group">
                        <x-pdf-list key="House#" :value="$student->addresses->house_number ?? '-'" />
                        <x-pdf-list key="Tahsil" :value="$student->addresses->tahsil ?? '-'" />
                            <x-pdf-list key="Village/Area" :value="$student->addresses->village_area ?? '-'" />
                        <x-pdf-list key="District" :value="$student->addresses->district ?? '-'" />
                        <x-pdf-list key="State" :value="$student->addresses->state ?? '-'" />
                        <x-pdf-list key="Pincode" :value="$student->addresses->pincode ?? '-'" />
                    </ul>
                    {{-- <hr> --}}
                    <h4>Bank Details</h4>
                    <ul class="list-group">
                        <x-pdf-list key="Account Holder Name" :value="$student->incomes->name_ac_holder ?? '-'" />
                        <x-pdf-list key="Bank Name" :value="$student->incomes->bank_name ?? '-'" />
                        <x-pdf-list key="Bank Branch" :value="$student->incomes->ac_branch ?? '-'" />
                        <x-pdf-list key="Account Number" :value="$student->incomes->ac_number ?? '-'" />
                        <x-pdf-list key="IFSC Code" :value="$student->incomes->ifsc ?? '-'" />
                    </ul>

                </div>
                <div class="col-xs-8 ">
                    <h4>Education Details</h4>
                    <ul class="list-group">
                        <x-pdf-list key="Course Name" :value="$student->educations->course->name ?? '-'" />
                        <x-pdf-list key="Course Year" :value="$student->educations->course_year ?? '-'" />
                        <x-pdf-list key="Branch Name" :value="$student->educations->branch_name ?? '-'" />
                        <x-pdf-list key="Course Period" :value="$student->educations->course_period ?? '-'" />
                        <x-pdf-list key="Rank Entrance" :value="$student->educations->rank_entrance ?? '-'" />
                        <x-pdf-list key="Institute Name" :value="$student->educations->institute_name ?? '-'" />
                        <x-pdf-list key="Institute locality" :value="$student->educations->institute_locality ?? '-'" />
                        <x-pdf-list key="Institute district" :value="$student->educations->institute_district ?? '-'" />
                        <x-pdf-list key="Institute state" :value="$student->educations->institute_state ?? '-'" />
                        <x-pdf-list key="Previous Course Name" :value="$student->previous->previous_course_name ?? '-'" />
                        <x-pdf-list key="Previous Course Subjects" :value="$student->previous->previous_course_subjects ?? '-'" />
                        <x-pdf-list key="Previous Hallticket" :value="$student->previous->previous_hallticket ?? '-'" />
                        <x-pdf-list key="Previous Cours Institution" :value="$student->previous->previous_course_institution ?? '-'" />
                        <x-pdf-list key="Previous Cours Marks" :value="$student->previous->previous_course_marks ?? '-'" />
                        <x-pdf-list key="Tenth subjects" :value="$student->previous->tenth_subjects ?? '-'" />
                        <x-pdf-list key="Tenth hallticket" :value="$student->previous->tenth_hallticket ?? '-'" />
                        <x-pdf-list key="Tenth institution" :value="$student->previous->tenth_institution ?? '-'" />
                        <x-pdf-list key="Tenth marks" :value="$student->previous->tenth_marks ?? '-'" />
                        <x-pdf-list key="Inter subjects" :value="$student->previous->inter_subjects ?? '-'" />
                        <x-pdf-list key="Inter hallticket" :value="$student->previous->inter_hallticket ?? '-'" />
                        <x-pdf-list key="Inter institution" :value="$student->previous->inter_institution ?? '-'" />
                        <x-pdf-list key="Inter marks" :value="$student->previous->inter_marks ?? '-'" />
                    </ul>
                    {{-- <hr> --}}
                    <h4>Income Details</h4>
                    <ul class="list-group">
                        <x-pdf-list key="Fathers occupation" :value="$student->incomes->fathers_occupation ?? '-'" />
                        <x-pdf-list key="Fathers Monthly Income" :value="$student->incomes->fathers_monthly_income ?? '-'" />
                        <x-pdf-list key="Expense Bearer" :value="$student->incomes->expense_bearer ?? '-'" />
                        <x-pdf-list key="Expense Bearer Monthly Income" :value="$student->incomes->expense_bearer_monthly_income ?? '-'" />
                    </ul>


                </div>
            </div>



                <h4>Student Uploads</h4>
                <ul class="list-group">
                    <x-pdf-list key="Image Uploaded" :value="asset('storage/' . ($student->uploads->image_file_path ?? '#'))" />
                    <x-pdf-list key="Fees File" :value="asset('storage/' . ($student->uploads->fees_file_path ?? '#'))" />
                    <x-pdf-list key="Adhaar File" :value="asset('storage/' . ($student->uploads->adhaar_file_path ?? '#'))" />
                    <x-pdf-list key="Marks File" :value="asset('storage/' . ($student->uploads->marks_file_path ?? '#'))" />
                    <x-pdf-list key="Passbook File" :value="asset('storage/' . ($student->uploads->passbook_file_path ?? '#'))" />

                </ul>

                <h4>Verification Status</h4>
                    <ul class="list-group list-group-flush">
                        <x-pdf-list key="Verification Status" :value="$student->verify->status ?? '-'" />
                        <x-pdf-list key="Comments" :value="$student->verify->comment ?? '-'" />
                        <x-pdf-list key="Verified by:" :value="$student->verify->user->name ?? '-'" />


                    </ul>



            @if ($key < count($students) - 1)
                <div class="page-break"></div>
            @endif
        </div>
    @endforeach





</body>

</html>
{{--
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->image_file_path ?? '#')) ">View File</a>
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->fees_file_path ?? '#')) ">View File</a>
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->adhaar_file_path ?? '#')) ">View File</a></td>
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->marks_file_path ?? '#')) ">View File</a></td>
    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->passbook_file_path ?? '#')) ">View File</a></td>
 --}}

{{-- <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PDF Report</title>
   <style>
     /* Reset default margin and padding */
/* Reset default margin and padding */
body, h1, h2, p {
  margin: 0;
  padding: 0;
}

/* Title style */
.title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px; /* Add some space below the title */
}

/* Subtitle style */
.subtitle {
  font-size: 18px;
  font-weight: bold;
  /* margin-bottom: 20px; Add more space below the subtitle */
  margin:0,auto,20px,auto;
}

/* Container for the two columns */
.columns-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
}

/* Style for each column */
.column {
  -ms-flex: 1; /* IE10 */
  flex: 1; /* Each column takes up equal space */
  padding: 0 10px; /* Add some padding to each column */
}
.page-break {
            page-break-after: always;
        }

   </style>
 </head>
 <body>
    @foreach ($students as $key => $student)
   <div class="title">JIH Scholarship</div>
   <div class="subtitle">Applicant:{{ $student->first_name ." ". $student->last_name }} </div>
   <div class="columns-container">
     <div class="column">
        <h4>Personal Details</h4>
        <ul class="list-group list-group-flush">
            <x-pdf-list key="Student id" :value="$student->id" />
            <x-pdf-list key="user id" :value="$student->user_id" />
            <x-pdf-list key="Email" :value="$student->user->email" />
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
        <hr>
     </div>
     <div class="column">
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
        <hr>
        <h4>Student Uploads</h4>
        <ul class="list-group list-group-flush">
            <x-pdf-list key="Image Uploaded:" :value="asset('storage/' . ($student->uploads->image_file_path ?? '#'))" />
            <x-pdf-list key="Fees File:" :value="asset('storage/' . ($student->uploads->fees_file_path ?? '#'))" />
            <x-pdf-list key="Adhaar File:" :value="asset('storage/' . ($student->uploads->adhaar_file_path ?? '#'))" />
            <x-pdf-list key="Marks File:" :value="asset('storage/' . ($student->uploads->marks_file_path ?? '#'))" />
            <x-pdf-list key="Passbook File:" :value="asset('storage/' . ($student->uploads->passbook_file_path ?? '#'))" />

        </ul>
        <hr>
        <h4>Verification Status</h4>
        <ul class="list-group list-group-flush">
            <x-pdf-list key="Verification Status" :value="$student->verify->status ?? '-'" />
            <x-pdf-list key="Comments" :value="$student->verify->comment ?? '-'" />
            <x-pdf-list key="Verified by:" :value="$student->verify->user->name ?? '-'" />


        </ul>
     </div>
   </div>
   @if ($key < count($students) - 1)
   <div class="page-break"></div>
   @endif


   @endforeach
 </body>
 </html> --}}
