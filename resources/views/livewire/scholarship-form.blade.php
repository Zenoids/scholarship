@php
    $mainheadingstyle = 'block text-xl  font-medium leading-6  text-gray-900';
    $mainsubstyle = 'block text-sm font-medium leading-6  text-gray-500';
    $sideheadstyle = 'block   font-medium leading-6  text-gray-700';
    $formlabelstyle = 'block  font-medium leading-6  text-gray-900';
    $forminputstyle = 'block ps-3 w-11/12   rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
@endphp
<section>

    <livewire:form-top-header />
    <livewire:second-header-form />


    <div class="bg-[#F2F4F7]">
        <div class="flex w-full pt-5">
            <div class="flex fixed md:w-2/12 md:ms-32 my-5 flex-col">

                <a
                    class="block text-lg font-medium leading-6  border-l-2 py-2 px-2 border-gray-300  @if ($currentPage == 1) text-indigo-950 @else text-gray-400 @endif hover:border-indigo-950 ">
                    Personal Details</a>

                <a
                    class="block text-lg font-medium leading-6  border-l-2 py-2 px-2 border-gray-300  @if ($currentPage == 2) text-indigo-950 @else text-gray-400 @endif hover:border-indigo-950">
                    Educational Details</a>
                <a
                    class="block text-lg font-medium leading-6  border-l-2 py-2 px-2 border-gray-300  @if ($currentPage == 3) text-indigo-950 @else text-gray-400 @endif hover:border-indigo-950">
                    Income Details</a>
                <a
                    class="block text-lg font-medium leading-6  border-l-2 py-2 px-2 border-gray-300  @if ($currentPage == 4) text-indigo-950 @else text-gray-400 @endif hover:border-indigo-950">
                    Upload files</a>

                <a
                    class="block text-lg font-medium leading-6  border-l-2 py-2 px-2 border-gray-300  @if ($currentPage == 5) text-indigo-950 @else text-gray-400 @endif hover:border-indigo-950">
                    Nearest JIH Details</a>

            </div>
            <form class="flex md:ms-[20%] md:w-8/12 w-full flex-col" enctype="multipart/form-data"
                wire:submit="finalsubmit">
                @if ($currentPage == 1)
                    <div id="section1" class="flex  rounded-xl  shadow-xl   bg-white py-4 mx-5 my-6 flex-col">
                        <div class="mx-6 my-6">
                            <div class="">
                                <p class="{{ $mainheadingstyle }}">Personal Details</p>
                                <p class="{{ $mainsubstyle }}">Please enter your Personal
                                    details
                                    accurately, this information will be used for verification purpose</p>
                                <hr class="my-12">
                                <div class="flex flex-col md:flex-row ">
                                    <div class="md:w-1/5 w-full flex-col me-8">
                                        <h3 class="{{ $sideheadstyle }}">General Information</h3>
                                        <p class="{{ $mainsubstyle }}">please provide the
                                            personal detials</p>
                                    </div>
                                    <div class="md:w-4/5 w-full  flex flex-wrap ">
                                        <div class="md:w-1/2 w-full mt-2 md:mt-3 ">
                                            <x-forminput label="First Name" name="first_name" type="text"
                                                wire:model="first_name" />

                                        </div>
                                        <div class="md:w-1/2 w-full  mt-2 md:mt-3  ">

                                            <x-forminput label="Last Name" name="last_name" type="text"
                                                wire:model="last_name" />

                                        </div>

                                        <div class="md:w-1/2 w-full mt-2 md:mt-3 ">
                                            <x-forminput label="Fathers Name" name="fathers_name" type="text"
                                                wire:model="fathers_name" />

                                        </div>
                                        <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                            <x-forminput label="Adhaar Number" name="adhaar" type="number"
                                                wire:model="adhaar" />

                                        </div>

                                        <div class="md:w-1/3 w-1/2 mt-2 md:mt-3 ">

                                            <x-forminput label="Mobile Number" name="mobile" type="number"
                                                wire:model="mobile" />


                                        </div>
                                        <div class="md:w-1/3 w-1/2 mt-2 md:mt-3 ">
                                            <x-forminput label="Religion" name="religion" type="text"
                                                wire:model="religion" />
                                        </div>


                                        <div class="md:w-1/3 w-1/2 mt-2 md:mt-3 ">

                                            <x-forminput label="Date of Birth" name="d_o_b" type="date"
                                                wire:model="d_o_b" />

                                        </div>
                                        <div class="md:w-1/3 w-1/2 mt-2 md:mt-3 ">
                                            <label class="{{ $formlabelstyle }}">Gender</label>
                                            <select name="gender" id="gender" class="{{ $forminputstyle }}"
                                                wire:model="gender" required>
                                                <option value="">Select an option</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>



                                        </div>
                                        <div class="md:w-1/3 w-1/2 mt-2 md:mt-3 ">

                                            <x-forminput label="Orphan/Disability" name="orphan_disability"
                                                type="text" wire:model="orphan_disability" />


                                        </div>

                                    </div>


                                </div>



                            </div>
                            <hr class="my-12">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-1/5 w-full flex-col me-8">
                                    <h3 class="{{ $sideheadstyle }}">Address Details</h3>
                                    <p class="{{ $mainsubstyle }}">please provide the
                                        Accurate Address details we may have a verification with address</p>
                                </div>
                                <div class="md:w-4/5 w-full  flex flex-wrap  ">

                                    <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                        <x-forminput label="House Number" name="house_number" type="text"
                                            wire:model="house_number" />

                                    </div>
                                    <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                        <x-forminput label="Village Area" name="village_area" type="text"
                                            wire:model="village_area" />
                                    </div>

                                    <div class="md:w-1/2 w-full mt-2 md:mt-3 ">
                                        <label class="{{ $formlabelstyle }}">Tahsil</label>
                                        <input required type="text" name="tahsil" id="tahsil" wire:model="tahsil"
                                            class="{{ $forminputstyle }}">
                                        @error('tahsil')
                                            <div class="text-red-800 text-sm">
                                                {{ $message }} </div>
                                        @enderror

                                    </div>
                                    <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                        <x-forminput label="State" name="state" type="text" wire:model="state" />

                                    </div>


                                    <div class="md:w-1/3 w-full mt-2 md:mt-3 ">

                                        <x-forminput label="District" name="district" type="text"
                                            wire:model="district" />
                                    </div>
                                    <div class="md:w-1/3 w-full mt-2 md:mt-3 ">
                                        <label class="{{ $formlabelstyle }}">House Type</label>
                                        <select name="house_type" id="house_type" class="{{ $forminputstyle }}"
                                            wire:model="house_type" required>
                                            <option value="">Select an option</option>
                                            <option value="rented">Rented</option>
                                            <option value="own">Own</option>
                                        </select>

                                    </div>
                                    <div class="md:w-1/3 w-full mt-2 md:mt-3">

                                        <x-forminput label="Pincode" name="pincode" type="text"
                                            wire:model="pincode" />

                                    </div>

                                </div>


                            </div>



                        </div>
                        <hr class="my-12">
                        <div class="flex justify-end">
                            <button wire:click="addressvalidate" type="button"
                                class="mx-4 inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Next
                            </button>
                            <button wire:click="addressreset" type="button"
                                class="inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Reset
                            </button>
                        </div>
                    </div>

        </div>



    </div>
    @endif
    @if ($currentPage == 2)
        <div id="section2" class="flex  rounded-xl  shadow-xl   bg-white py-4 mx-5 my-6 flex-col">
            <div class="mx-6 my-6">
                <div class="">
                    <p class="{{ $mainheadingstyle }}">Educational Details</p>
                    <p class="{{ $mainsubstyle }}">Please enter your Educational
                        details
                        accurately, this information will be used for verification purpose</p>
                    <hr class="my-12">
                    <div class="flex flex-col md:flex-row ">
                        <div class="md:w-1/5 w-full flex-col me-8">
                            <h3 class="{{ $sideheadstyle }}">Current Education
                                Information</h3>
                            <p class="{{ $mainsubstyle }}">please provide the
                                detials of your current education</p>
                        </div>
                        <div class="md:w-4/5 w-full  flex flex-wrap  ">
                            {{-- <div class="flex flex-col md:flex-row"> --}}
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Course Name</label>

                                <select name="course_id" id="course_id" class="{{ $forminputstyle }}"
                                    wire:model="course_id">
                                    @foreach ($courses as $course)
                                        <option wire:key="{{ $course->id }}" value="{{ $course->id }}">
                                            {{ $course->name }}</option>
                                    @endforeach

                                </select>
                                @error('course_id')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Course Year" name="course_year" type="text"
                                    wire:model="course_year" />


                            </div>

                            {{-- </div>
                                        <div class="flex flex-col md:flex-row mt-5"> --}}
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Course Period" name="course_period" type="text"
                                    wire:model="course_period" />


                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Entrance Rank" name="rank_entrance" type="text"
                                    wire:model="rank_entrance" />


                            </div>


                            {{-- </div>
                                        <div class="flex flex-col md:flex-row mt-5"> --}}

                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Institute Name" name="institute_name" type="text"
                                    wire:model="institute_name" />


                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Branch Name" name="branch_name" type="text"
                                    wire:model="branch_name" />


                            </div>

                            <div class="md:w-1/3 w-full mt-2 md:mt-3">

                                <x-forminput label="Institute State" name="institute_state" type="text"
                                    wire:model="institute_state" />


                            </div>
                            <div class="md:w-1/3 w-full mt-2 md:mt-3">

                                <x-forminput label="Institute District" name="institute_district" type="text"
                                    wire:model="institute_district" />


                            </div>
                            <div class="md:w-1/3 w-full mt-2 md:mt-3">

                                <x-forminput label="Institute Locality" name="institute_locality" type="text"
                                    wire:model="institute_locality" />


                            </div>


                            {{-- </div> --}}



                        </div>



                    </div>
                    <hr class="my-12">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/5 w-full flex-col me-8">
                            <h3 class="{{ $sideheadstyle }}">Previous Education Details
                            </h3>
                            <p class="{{ $mainsubstyle }}">please provide the
                                previous educational details</p>
                        </div>
                        <div class="md:w-4/5 w-full  flex flex-wrap  mt-2 md:mt-3">
                            {{-- <div class="flex flex-col md:flex-row"> --}}
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Previous Course Name" name="previous_course_name" type="text"
                                    wire:model="previous_course_name" />

                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Previous Subjects taken" name="previous_course_subjects"
                                    type="text" wire:model="previous_course_subjects" />

                            </div>
                            {{-- </div>
                                        <div class="flex flex-col md:flex-row mt-5"> --}}
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Previous Education Institute" name="previous_course_institution"
                                    type="text" wire:model="previous_course_institution" />

                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Marks Achived Previously" name="previous_course_marks"
                                    type="text" wire:model="previous_course_marks" />

                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">

                                <x-forminput label="Previous Hall ticket Number" name="previous_hallticket"
                                    type="text" wire:model="previous_hallticket" />

                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-12">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/5 w-full flex-col me-8">
                        <h3 class="{{ $sideheadstyle }}">10th Class Details
                        </h3>
                        <p class="{{ $mainsubstyle }}">please enter the 10 class details accurately</p>
                    </div>
                    <div class="md:w-4/5 w-full  flex flex-wrap  mt-2 md:mt-3">

                        <div class="md:w-1/2 w-full mt-2 md:mt-3">

                            <x-forminput label="Subjects " name="tenth_subjects" type="text"
                                wire:model="tenth_subjects" />

                        </div>
                        {{-- </div>
                                        <div class="flex flex-col md:flex-row mt-5"> --}}
                        <div class="md:w-1/2 w-full mt-2 md:mt-3">

                            <x-forminput label="Institute" name="tenth_institution" type="text"
                                wire:model="tenth_institution" />

                        </div>
                        <div class="md:w-1/2 w-full mt-2 md:mt-3">

                            <x-forminput label="Marks Achived " name="tenth_marks" type="text"
                                wire:model="tenth_marks" />

                        </div>
                        <div class="md:w-1/2 w-full mt-2 md:mt-3">

                            <x-forminput label="Hall ticket Number" name="tenth_hallticket" type="text"
                                wire:model="tenth_hallticket" />

                        </div>
                    </div>
                </div>
                <hr class="my-12">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/5 w-full flex-col me-8">
                        <h3 class="{{ $sideheadstyle }}">Intermediate or 11 and 12th class details
                        </h3>
                        <p class="{{ $mainsubstyle }}">please provide the
                            intermediate educational or 11tha and 12th class details</p>
                    </div>
                    <div class="md:w-4/5 w-full  flex flex-wrap  mt-2 md:mt-3">


                        <div class="md:w-1/2 w-full mt-2 md:mt-3">

                            <x-forminput label=" Subjects taken" name="inter_subjects" type="text"
                                wire:model="inter_subjects" />

                        </div>
                        {{-- </div>
                                        <div class="flex flex-col md:flex-row mt-5"> --}}
                        <div class="md:w-1/2 w-full mt-2 md:mt-3">

                            <x-forminput label="Education Institute" name="inter_institution" type="text"
                                wire:model="inter_institution" />

                        </div>
                        <div class="md:w-1/2 w-full mt-2 md:mt-3">

                            <x-forminput label="Marks Achived " name="inter_marks" type="text"
                                wire:model="inter_marks" />

                        </div>
                        <div class="md:w-1/2 w-full mt-2 md:mt-3">

                            <x-forminput label="Hall ticket Number" name="inter_hallticket" type="text"
                                wire:model="inter_hallticket" />

                        </div>


                        {{-- </div> --}}



                    </div>



                </div>
                <hr class="my-12">
                <div class="flex justify-between">
                    <div class=""><button wire:click="backonepage" type="button"
                            class=" inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                            Previous
                        </button></div>
                    <div class="flex">
                        <button wire:click="educationvalidate" type="button"
                            class="mx-4 inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                            Next
                        </button>
                        <button wire:click="educationreset" type="button"
                            class="inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                            Reset
                        </button>
                    </div>

                </div>
            </div>

        </div>
        </div>
    @endif
    @if ($currentPage == 3)
        <div id="section3" class="flex  rounded-xl  shadow-xl   bg-white py-4 mx-5 my-6 flex-col">
            <div class="mx-6 my-6">
                <div class="">
                    <p class="{{ $mainheadingstyle }}">Income Details</p>
                    <p class="{{ $mainsubstyle }}">Please enter your Income details accurately, this
                        information will be used for verification purpose</p>
                    <hr class="my-12">
                    <div class="flex flex-col md:flex-row ">
                        <div class="md:w-1/5 w-full flex-col me-8">
                            <h3 class="{{ $sideheadstyle }}">Income Details</h3>
                            <p class="{{ $mainsubstyle }}">please provide the
                                detials of your household income</p>
                        </div>
                        <div class="md:w-4/5 w-full  flex flex-wrap  mt-2 md:mt-3">
                            {{-- <div class="flex flex-col md:flex-row"> --}}
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                <x-forminput label="Fathers Occupation" name="fathers_occupation" type="text"
                                    wire:model="fathers_occupation" />

                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                <x-forminput label="Fathers Monthly Income" name="fathers_monthly_income"
                                    type="text" wire:model="fathers_monthly_income" />

                            </div>
                            {{-- </div>
                                        <div class="flex flex-col md:flex-row mt-5"> --}}
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                <x-forminput label="Expense Bearer" name="expense_bearer" type="text"
                                    wire:model="expense_bearer" />

                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                <x-forminput label="Expense Bearer Monthly Income"
                                    name="expense_bearer_monthly_income" type="text"
                                    wire:model="expense_bearer_monthly_income" />

                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <hr class="my-12">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/5 w-full flex-col me-8">
                            <h3 class="{{ $sideheadstyle }}">Bank Account Details
                            </h3>
                            <p class="{{ $mainsubstyle }}">please provide the
                                accurate Bank account details</p>
                        </div>
                        <div class="md:w-4/5 w-full  flex flex-wrap  mx-2">
                            {{-- <div class="flex flex-col md:flex-row"> --}}
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                <x-forminput label="Name of account holder" name="name_ac_holder" type="text"
                                    wire:model="name_ac_holder" />


                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">


                                <x-forminput label="Bank Name" name="bank_name" type="text"
                                    wire:model="bank_name" />

                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">


                                <x-forminput label="Bank Account Number" name="ac_number" type="password"
                                    wire:model="ac_number" />

                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">


                                <x-forminput label="Confirm Account Number" name="confirm_ac_number" type="text"
                                    wire:model="confirm_ac_number" />

                            </div>
                            {{-- </div>
                                        <div class="flex flex-col md:flex-row mt-5"> --}}
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                <x-forminput label="Bank account branch name" name="ac_branch" type="text"
                                    wire:model="ac_branch" />


                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3 ">

                                <x-forminput label="IFSC Code" name="ifsc" type="text" wire:model="ifsc" />



                            </div>

                            {{-- </div> --}}



                        </div>



                    </div>
                    <hr class="my-12">
                    <div class="flex justify-between">
                        <div class=""><button wire:click="backonepage" type="button"
                                class=" inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Previous
                            </button></div>
                        <div class="flex">
                            <button wire:click="incomevalidate" type="button"
                                class="mx-4 inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Next
                            </button>
                            <button wire:click="incomereset" type="button"
                                class="inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Reset
                            </button>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    @endif
    @if ($currentPage == 4)
        <div id="section4" class="flex  rounded-xl  shadow-xl   bg-white py-4 mx-5 my-6 flex-col">
            <div class="mx-6 my-6">
                <div class="">
                    <p class="{{ $mainheadingstyle }}">Upload the required Files</p>
                    <p class="{{ $mainsubstyle }}">Please upload the updated files required for easy verification try
                        to upload compressed image of max size 2mb</p>
                    <hr class="my-12">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/5 w-full flex-col me-8">
                            <h3 class="{{ $sideheadstyle }}">Upload files</h3>
                            <p class="{{ $mainsubstyle }}">Make sure to upload latest files of minimum size</p>
                        </div>
                        <div class="md:w-4/5 w-full  flex flex-wrap ">
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Passport size Picture</label>
                                <input type="file" accept=".jpg,.png,.jpeg,.webp,.pdf" required name="photofile"
                                    wire:model="photofile"
                                    class="rounded-md bg-white px-2.5 py-1.5  w-5/6 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                @error('photofile')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror


                            </div>

                            <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Course fee photo</label>
                                <input type="file" accept=".jpg,.png,.jpeg,.webp,.pdf" required name="feesfile"
                                    wire:model="feesfile"
                                    class="rounded-md bg-white px-2.5 py-1.5  w-5/6 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                @error('feesfile')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Previous Marks Card</label>
                                <input type="file" accept=".jpg,.png,.jpeg,.webp,.pdf" required name="marksfile"
                                    wire:model="marksfile"
                                    class="rounded-md bg-white px-2.5 py-1.5  w-5/6 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                @error('marksfile')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Adhaar card</label>
                                <input type="file" accept=".jpg,.png,.jpeg,.webp,.pdf" required name="adhaarfile"
                                    wire:model="adhaarfile"
                                    class="rounded-md bg-white px-2.5 py-1.5  w-5/6 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                @error('adhaarfile')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Bank Account Passbook photo</label>
                                <input type="file" accept=".jpg,.png,.jpeg,.webp,.pdf" required
                                    name="passbookfile" wire:model="passbookfile"
                                    class="rounded-md bg-white px-2.5 py-1.5  w-5/6 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                @error('passbookfile')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror
                            </div>


                        </div>
                    </div>
                    <hr class="my-12">
                    <div class="flex justify-between">
                        <div class=""><button wire:click="backonepage" type="button"
                                class=" inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Previous
                            </button></div>
                        <div class="flex">
                            <button wire:click="filevalidate" type="button"
                                class="mx-4 inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Next
                            </button>
                            <button wire:click="filerest" type="button"
                                class="inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Reset
                            </button>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    @endif
    @if ($currentPage == 5)
        {{-- @dd($districts) --}}

        <div id="section5" class="flex  rounded-xl  shadow-xl   bg-white py-4 mx-5 my-6 flex-col">
            <div class="mx-6 my-6">
                <div class="">
                    <p class="{{ $mainheadingstyle }}">Nearest Jamaat office Details</p>
                    <p class="{{ $mainsubstyle }}">Please Select carefully the nearest Jamaat Islami Hind
                        office, As your scholarship will be verified and approved by the nearest office</p>
                    <hr class="my-12">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/5 w-full flex-col me-8">
                            <h3 class="{{ $sideheadstyle }}">Choose the JIH office</h3>
                            <p class="{{ $mainsubstyle }}">Try to select the office as near to your
                                address as
                                possible as it would speed up the scholarship process</p>
                        </div>
                        <div class="md:w-4/5 w-full  flex flex-wrap  mt-2 md:mt-3">
                            {{-- <div class="flex md:flex-row flex-col"> --}}
                            <div class="md:w-1/3 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Select State</label>

                                <select class="{{ $forminputstyle }}" wire:model.live="selectedState">
                                    {{-- @dd($states) --}}
                                    <option disabled>Select State</option>
                                    @foreach ($states as $state)
                                        <option  value="{{ $state->id }}">
                                            {{ $state->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('selectedState')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="md:w-1/3 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Select District</label>
                                @if (!is_null($selectedState))
                                    <select class="{{ $forminputstyle }}" wire:model.live="selectedDistrict">
                                        <option disabled>Select District</option>
                                        @foreach ($districts as $district)
                                            <option  value="{{ $district->id }}">
                                                {{ $district->name }}
                                            </option>
                                        @endforeach
                                        {{-- @endif --}}
                                @endif
                                </select>
                                @error('selectedDistrict')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="md:w-1/3 w-full mt-2 md:mt-3">
                                <label class="{{ $formlabelstyle }}">Select Unit office</label>

                                @if (!is_null($selectedDistrict))
                                    <select class="{{ $forminputstyle }}" wire:model.live="unit_admin_id">
                                        <option disabled>Select nearest office</option>
                                        @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}">
                                                {{ $unit->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                @endif
                                @error('unit_admin_id')
                                    <div class="text-red-800 text-sm">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                            {{-- </div> --}}

                        </div>
                    </div>
                    <hr class="my-12">
                    <div class="flex justify-between">
                        <div class=""><button wire:click="backonepage" type="button"
                                class=" inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Previous
                            </button></div>
                        <div class="flex">
                            <button wire:click="finalsubmit" type="button"
                                class=" inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Submit Form
                            </button>

                        </div>

                    </div>


                </div>

            </div>
        </div>
    @endif


    </form>
    </div>
    </div>
</section>
