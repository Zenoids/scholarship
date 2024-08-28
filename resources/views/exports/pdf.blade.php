<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PDF Download</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .qr-code-container {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    float: left;
    width: calc(20% - 20px); /* Adjust width to fit five QR codes in a row */
    box-sizing: border-box;
}
        .qr-code-container2 {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    float: left;
    width: calc(20% - 20px); /* Adjust width to fit five QR codes in a row */
    box-sizing: border-box;
}
.clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

.qr-code-label {
    font-weight: bold;
    margin-bottom: 10px;
}

.page-break {
    page-break-after: always;
}

hr {
    display: block;
    height: 1px;
    background: transparent;
    width: 100%;
    border: none;
    border-top: solid 1px #aaa;
}

body {
    margin: 0;
    padding: 0;
}


    </style>
</head>

<body>
    @foreach ($students as $key => $student)
        <h1 class="text-center">JIH Scholarship</h1>
        <h2 class="">Applicant:{{ $student->first_name ." ". $student->last_name }} </h2>
        <div class="row">
            {{-- <div class=" container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    <img src="logo.png" width="150px" height="60px" alt="JIH logo">
                </div>
                <h2 class="col-xs-9">JIH Scholarship Application Form</h2>
                {{-- <h5 class="text-center">Applicant:{{ $student->first_name . $student->last_name }} </h5>
            </div>

            <div class="row"> --}}

            {{-- <div class=""> --}}
            <h4>Personal Details</h4>
            <ul class="list-group">


                <x-pdf-list key="APPLICATION id" :value="$student->id" />
                <x-pdf-list key="Scholarship" :value="$student->scholarship->name??'-'" />
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
                <x-pdf-list key="Email" :value="$student->user->email ?? '-'" />
                <x-pdf-list key="Adhaar" :value="$student->adhaar ?? '-'" />
                <x-pdf-list key="Orphan Disability" :value="$student->orphan_disability ?? '-'" />
            </ul>
            <hr>
            <h4>Address Details</h4>
            <ul class="list-group">
                <x-pdf-list key="House#" :value="$student->addresses->house_number ?? '-'" />
                <x-pdf-list key="Tahsil" :value="$student->addresses->tahsil ?? '-'" />
                <x-pdf-list key="Village/Area" :value="$student->addresses->village_area ?? '-'" />
                <x-pdf-list key="District" :value="$student->addresses->district ?? '-'" />
                <x-pdf-list key="State" :value="$student->addresses->state ?? '-'" />
                <x-pdf-list key="Pincode" :value="$student->addresses->pincode ?? '-'" />
            </ul>
            <hr>
            <h4>Bank Details</h4>
            <ul class="list-group">
                <x-pdf-list key="Account Holder Name" :value="$student->incomes->name_ac_holder ?? '-'" />
                <x-pdf-list key="Bank Name" :value="$student->incomes->bank_name ?? '-'" />
                <x-pdf-list key="Bank Branch" :value="$student->incomes->ac_branch ?? '-'" />
                <x-pdf-list key="Account Number" :value="$student->incomes->ac_number ?? '-'" />
                <x-pdf-list key="IFSC Code" :value="$student->incomes->ifsc ?? '-'" />
            </ul>

            {{-- </div> --}}
            <hr>
            {{-- <div class=" "> --}}
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
            <hr>
            <h4>Income Details</h4>
            <ul class="list-group">
                <x-pdf-list key="Fathers occupation" :value="$student->incomes->fathers_occupation ?? '-'" />
                <x-pdf-list key="Fathers Monthly Income" :value="$student->incomes->fathers_monthly_income ?? '-'" />
                <x-pdf-list key="Expense Bearer" :value="$student->incomes->expense_bearer ?? '-'" />
                <x-pdf-list key="Expense Bearer Monthly Income" :value="$student->incomes->expense_bearer_monthly_income ?? '-'" />
            </ul>


            {{-- </div> --}}
            {{-- </div> --}}


            <hr>
            <h4>Student Uploads</h4>

                {{-- <x-pdf-list key="Image Uploaded" :value="asset('storage/' . ($student->uploads->image_file_path ?? '#'))" />
            <x-pdf-list key="Fees File" :value="asset('storage/' . ($student->uploads->fees_file_path ?? '#'))" />
            <x-pdf-list key="Adhaar File" :value="asset('storage/' . ($student->uploads->adhaar_file_path ?? '#'))" />
            <x-pdf-list key="Marks File" :value="asset('storage/' . ($student->uploads->marks_file_path ?? '#'))" />
            <x-pdf-list key="Passbook File" :value="asset('storage/' . ($student->uploads->passbook_file_path ?? '#'))" /> --}}
                <div class="clearfix">
                    <div class="">
                        <div class="qr-code-container">
                            <div class="qr-code-label">Image Uploaded</div>
                            <img width="200px" src="data:image/png;base64, {!! base64_encode(
                                QrCode::format('png')->size(256)->generate(asset('storage/' . ($student->uploads->image_file_path ?? '#'))),
                            ) !!} ">
                        </div>
                    </div>
                    <div class="">
                        <div class="qr-code-container">
                            <div class="qr-code-label">Fees File</div>
                            <img width="200px" src="data:image/png;base64, {!! base64_encode(
                                QrCode::format('png')->size(256)->generate(asset('storage/' . ($student->uploads->fees_file_path ?? '#'))),
                            ) !!} ">
                        </div>
                    </div>
                    <div class="">
                        <div class="qr-code-container">
                            <div class="qr-code-label">Adhaar File</div>
                            <img width="200px" src="data:image/png;base64, {!! base64_encode(
                                QrCode::format('png')->size(256)->generate(asset('storage/' . ($student->uploads->adhaar_file_path ?? '#'))),
                            ) !!} ">
                        </div>
                    </div>
                </div>
</div>
                <div class="clearfix">
                    <div class="">
                        <div class="qr-code-container2">
                            <div class="qr-code-label">Marks File</div>
                            <img width="200px" src="data:image/png;base64, {!! base64_encode(
                                QrCode::format('png')->size(256)->generate(asset('storage/' . ($student->uploads->marks_file_path ?? '#'))),
                            ) !!} ">
                        </div>
                    </div>
                    <div class="">
                        <div class="qr-code-container2">
                            <div class="qr-code-label">Passbook File</div>
                            <img width="200px" src="data:image/png;base64, {!! base64_encode(
                                QrCode::format('png')->size(256)->generate(asset('storage/' . ($student->uploads->passbook_file_path ?? '#'))),
                            ) !!} ">
                        </div>
                    </div>
                </div>
                                {{-- {!! QrCode::size(256)->generate( asset('storage/' . ($student->uploads->fees_file_path ?? '#')) ) !!} --}}





            <hr>
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
