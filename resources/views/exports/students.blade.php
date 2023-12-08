<table class="table table-striped table-hover">
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
            <th>passbook_file_path: </th>

          {{-- <th scope="col">Download</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach($students as $student)
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
                {{-- <td>{{ $student->uploads->image_file_path??""}}</td>
                <td>{{ $student->uploads->fees_file_path??""}}</td>
                <td>{{ $student->uploads->adhaar_file_path??""}}</td>
                <td>{{ $student->uploads->marks_file_path??""}}</td>
                <td>{{ $student->uploads->passbook_file_path}}</??""td> --}}
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->image_file_path ?? '#')) }}">View File</a></td>
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->fees_file_path ?? '#')) }}">View File</a></td>
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->adhaar_file_path ?? '#')) }}">View File</a></td>
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->marks_file_path ?? '#')) }}">View File</a></td>
                    <td><a class="btn btn-outline-info" href="{{ asset('storage/' . ($student->uploads->passbook_file_path ?? '#')) }}">View File</a></td>

            </tr>
        @endforeach
    </tbody>
</table>
