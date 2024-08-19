
@php
    $mainheadingstyle = 'block text-xl  font-medium leading-6  text-gray-900';
    $mainsubstyle = 'block text-sm font-medium leading-6  text-gray-500';
    $sideheadstyle = 'block   font-medium leading-6  text-gray-700';
    $formlabelstyle = 'block  font-medium leading-6  text-gray-900';
    $forminputstyle = 'block ps-3 w-11/12   rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6';
@endphp
<section>
    {{-- <livewire:header/> --}}

    {{-- <livewire:form-top-header /> --}}
    <livewire:second-header-form />

    <div class="bg-[#F2F4F7]">
        {{-- <div class="flex w-full pt-5">
            <div class="flex fixed md:w-2/12 md:ms-32 my-5 flex-col">



                <a
                    class="block text-lg font-medium leading-6  border-l-2 py-2 px-2 border-gray-300
                    {{-- @if ($currentPage == 5) --}}
                     {{-- text-indigo-950 --}}
                      {{-- @else --}}
                       {{-- text-gray-400 --}}
                        {{-- @endif
                         hover:border-indigo-950">
                    Terms and conditions for Scholarship</a>

            </div> --}}
            <div class="flex py-5 md:ms-[20%] md:w-8/12 w-full flex-col"  >

                {{-- @if ($currentPage == 1) --}}

                <div id="" class="flex  rounded-xl  shadow-xl   bg-white py-4 mx-5 my-6 flex-col">
                    <div class="mx-6 my-6">
                        <div class="">
                            <p class="{{ $mainheadingstyle }}">Terms and conditions</p>
                            <p class="{{ $mainsubstyle }}">please go through each line carefully and keep requested data
                                ready for easy form filling</p>
                            <hr class="my-12">
                            <div class="flex flex-col md:flex-row ">
                                <div class="md:w-1/5 w-full flex-col">
                                    <h3 class="{{ $sideheadstyle }}">Please read each line carefully before registering
                                    </h3>
                                    <p class="{{ $mainsubstyle }}"> </p>
                                </div>
                                <div class="md:w-4/5 w-full  flex flex-wrap ">


                                    <div class="flex  flex-col w-full">
                                        <h1 class="text-center text-2xl font-semibold">{{App\Models\Scholarship::latest()->first()->name}}
                                        </h1>

                                    </div>


                                </div>


                            </div>

                            <hr class="my-12">
                            <div class="flex flex-col md:flex-row ">
                                <div class="md:w-1/5 w-full flex-col">
                                    <h3 class="{{ $sideheadstyle }}">Vision</h3>
                                    <p class="{{ $mainsubstyle }}"> </p>
                                </div>
                                <div class="md:w-4/5 w-full  flex flex-wrap ">


                                    <div class="flex  flex-col w-full">

                                        <ul class="text-gray-700 md:ms-5 list-disc">
                                            <li>The program promotes higher education especially among minority Students
                                            </li>
                                            <li>Scholarships for UG/PG courses</li>
                                            <li>Qualifying criteria to ascertain meritorious students</li>
                                            <li>Jamaat-e-Islami Hind’s being driven by Vision of Social change,
                                                disciplines of Social
                                                sciences, Humanities and critical fields such as AI will be given
                                                priority </li>
                                        </ul>

                                    </div>


                                </div>


                            </div>
                            <hr class="my-12">
                            <div class="flex flex-col md:flex-row ">
                                <div class="md:w-1/5 w-full flex-col">
                                    <h3 class="{{ $sideheadstyle }}">Disciplines focussed: UG & PG</h3>
                                    <p class="{{ $mainsubstyle }}"> </p>
                                </div>
                                <div class="md:w-4/5 w-full  flex flex-wrap ">


                                    <div class="flex  flex-col w-full">


                                        <ul class="text-gray-700 md:ms-5 list-disc">
                                            <li> Medicine and Allied Health Science</li>
                                            <li>Education Programs - B.Ed., M.Ed</li>
                                            <li>Civil Services: Scholarships for students pursuing civil services
                                                courses</li>
                                            <li>Economics and Commerce</li>
                                            <li>Political science</li>
                                            <li>History</li>
                                            <li>Humanities</li>
                                            <li>Artificial Intelligence (AI) and Neural Networks</li>
                                            <li>Data Science</li>
                                            <li>Design thinking & Innovation</li>
                                            <li>Research & Book Publishing</li>
                                            <li>Budgeting and financial planning</li>
                                            <li>LLB / LLM</li>
                                            <li>Journalism & Mass Communication</li>
                                            <li>Media Management & Digital Media</li>
                                            <li>Script Writing & Short Film Making</li>
                                            <li>Leadership & Management</li>
                                            <li>Children Management & Development </li>


                                        </ul>

                                    </div>


                                </div>


                            </div>
                            <hr class="my-12">
                            <div class="flex flex-col md:flex-row ">
                                <div class="md:w-1/5 w-full flex-col">
                                    <h3 class="{{ $sideheadstyle }}">Operations and Management</h3>
                                    <p class="{{ $mainsubstyle }}"> </p>
                                </div>
                                <div class="md:w-4/5 w-full  flex flex-wrap ">


                                    <div class="flex  flex-col w-full">

                                        {{-- <h2 class=" text-xl  font-medium my-5 underline"></h2> --}}
                                        <ul class="text-gray-700 md:ms-5 list-disc">
                                            <li> Candidates must be enrolled in the above-mentioned domain and courses.
                                            </li>
                                            <li>Selection of awardees will be based on interviews only</li>
                                            <li>This scholarship is for 1st-year students of the above-mentioned courses
                                                and will be
                                                continued further with conditions</li>
                                            <li>This scholarship is refundable by the students after completion of
                                                education when
                                                she/he is employed</li>
                                            <li><b>Note:</b> Attaching the payment receipt of the course fee (for the
                                                current year) is
                                                mandatory</li>



                                        </ul>

                                    </div>


                                </div>


                            </div>

                            <hr class="my-12">
                            <div class="flex flex-col md:flex-row ">
                                <div class="md:w-1/5 w-full flex-col">
                                    <h3 class="{{ $sideheadstyle }}">Before going forward</h3>
                                    <p class="{{ $mainsubstyle }}"> Please make sure to keep the given data and files ready with you </p>
                                </div>
                                <div class="md:w-4/5 w-full  flex flex-wrap ">


                                    <div class="flex  flex-col w-full">

                                        {{-- <h2 class=" text-xl  font-medium my-5 underline"></h2> --}}
                                        <ul class="text-gray-700 md:ms-5 list-disc">

                                            <li>Your personal details</li>
                                            <li>Your addres details</li>
                                            <li>Your household income details</li>
                                            <li>Your education details</li>
                                            <li>Your previous education details</li>
                                            <li>Your Bank account details</li>
                                            <li><b>Mandatory Attachments: </b><ul class="text-gray-700 md:ms-5 list-disc" >
                                                <li>Attaching the payment receipt of the course fee (for the
                                                    current year) </li>
                                                <li>Attachment of your latest Adhaar card</li>
                                                <li>Attachment of your previous marks card </li>
                                                <li>Attachment of your Bank Account Passbook </li>
                                                <li>Attachment of your passport size photo </li></ul>
                                            <b> supported formats .pdf, .jpeg, .jpg, .png and maximum upload size: 2MB</b> </li>



                                        </ul>

                                    </div>


                                </div>


                            </div>
                            @if ($currentPage == 2)

@guest

                            <hr class="my-12">
                            <div class="flex flex-col md:flex-row ">
                                <div class="md:w-1/5 w-full flex-col">
                                    <h3 class="{{ $sideheadstyle }}">Please Register to Fill the Application form</h3>
                                    <p class="{{ $mainsubstyle }}"> </p>
                                </div>
                                <div >

                                    {{-- <livewire:pages.auth.register /> --}}

                                    <form class=" " wire:submit="register" >
                                        <div class="md:w-4/5 w-full ms-5 flex flex-wrap">
                                    <!-- Name -->
                                    <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input wire:model="name" id="name" class="block mt-1 w-11/12"
                                            type="text" name="name" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input wire:model="email" id="email" class="block mt-1 w-11/12"
                                            type="email" name="email" required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input wire:model="password" id="password" class="block mt-1 w-11/12"
                                            type="password" name="password" required autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="md:w-1/2 w-full mt-2 md:mt-3">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-text-input wire:model="password_confirmation" id="password_confirmation"
                                            class="block mt-1 w-11/12" type="password" name="password_confirmation"
                                            required autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('login') }}" wire:navigate>
                                            {{ __('Already registered?') }}
                                        </a>


                                    </div>
                                </div>
                                    <hr class="my-12">
                                    <div class="flex justify-end">
                                        <x-primary-button class="ml-4">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </form>
                                    </div>


                            </div>



                        </div>
                        @endguest

@endif
                        @if ($currentPage==1)
                        @guest
                        <x-primary-button wire:click="registrationpage" class="ml-4 float-right">
                            {{ __('Register') }}
                        </x-primary-button>
                        @endguest
                        @endif


                            @auth
                            <x-primary-button wire:click="proceed" class="ml-4">
                                {{ __('Proceed') }}
                            </x-primary-button>
                            @endauth

                            {{-- <button wire:click="addressvalidate" type="button"
                                class="mx-4 inline-block rounded bg-green-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Next
                            </button> --}}
                            {{-- <button wire:click="addressreset" type="button"
                                class="inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(20,164,77,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.2),0_4px_18px_0_rgba(20,164,77,0.1)]">
                                Reset
                            </button> --}}
                        </div>

                    </div>

                </div>



        </div>

        <div>
    </div>
    </div>

</section>
