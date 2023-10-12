<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("fathers_name");
            $table->date("d_o_b");
            $table->enum('gender',['male','female']);
            $table->string("religion");
            $table->string("mobile");
            $table->string('adhaar')->unique();
            $table->string("orphan_disability");
            $table->timestamps();
        });

        Schema::create('students_address', function (Blueprint $table) {
            $table->id();
            $table->foreignId("student_id")->constrained();
            $table->string("house_number");
            $table->string("village_area");
            $table->string("tahsil")->nullable();
            $table->enum('house_type',['rented','own']);
            $table->string("district");
            $table->string("state");
            $table->string("pincode");
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
        });

        Schema::create('students_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId("student_id")->constrained();
            $table->foreignId("course_id")->constrained();
            $table->string('course_year');
            $table->string("branch_name");
            $table->string("course_period");
            $table->string("rank_entrance");
            $table->string("institute_name");
            $table->string("institute_locality")->nullable();
            $table->string("institute_district");
            $table->string("institute_state");


        });

        Schema::create('students_previous_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();

            // 10th Standard Details
            $table->string('tenth_hallticket')->nullable();
            $table->string('tenth_subjects')->nullable();
            $table->string('tenth_institution')->nullable();
            $table->string('tenth_marks')->nullable();

            // 11th Standard Details
            $table->string('inter_hallticket')->nullable();
            $table->string('inter_subjects')->nullable();
            $table->string('inter_institution')->nullable();
            $table->string('inter_marks')->nullable();

            // Previous Course Details
            $table->string('previous_course_name');
            $table->string('previous_hallticket');
            $table->string('previous_course_subjects');
            $table->string('previous_course_institution');
            $table->string('previous_course_marks');

        });

        Schema::create('students_income', function (Blueprint $table) {
            $table->id();
            $table->foreignId("student_id")->constrained()->cascadeOnDelete();

            //bank details
            $table->string("name_ac_holder");
           $table->string("ac_number");
           $table->string("bank_name");
           $table->string("ac_branch");
           $table->string("ifsc");

            //details of income
            $table->string("fathers_occupation");
            $table->string("fathers_monthly_income");
            $table->string("expense_bearer");
            $table->string("expense_bearer_monthly_income");

        });

        Schema::create('students_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignId("student_id")->constrained()->cascadeOnDelete();

            $table->string("image_file_path");
            $table->string("fees_file_path");
            $table->string("adhaar_file_path");
            $table->string("marks_file_path");
            $table->string("passbook_file_path");
        });



        Schema::create('nearest_jamat_office', function (Blueprint $table) {
            $table->id();
            $table->foreignId("student_id")->constrained()->cascadeOnDelete();
            $table->foreignId("unit_admin_id")->constrained();
            $table->foreignId("state_admin_id")->constrained();

        });
    }
//
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('students_address');
        Schema::dropIfExists('students_education');
        Schema::dropIfExists('students_previous_education');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('students_income');
        Schema::dropIfExists('students_uploads');
        Schema::dropIfExists('nearest_jamat_office');
    }
};
