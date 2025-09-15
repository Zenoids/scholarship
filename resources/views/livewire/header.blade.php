<header class="flex flex-col">

    {{-- <div class="">Tel: +91 7001333502</div> --}}
    {{-- <div class="bg-[#4A51A3]">
        <div            class=" container mx-auto md:h-8  w-full flex md:flex-row flex-col font-semibold justify-between items-center text-lg   text-white">
            <div class="">Email: scholarship@jih.org.in</div>
        </div>
    </div> --}}
    {{-- <div class="bg-white">
        <div
            class="mainheader md:h-25 flex md:flex-row  flex-col justify-between items-center  container mx-auto text-[#4A51A3]">
            <div class="w-full md:w-auto flex justify-center py-5 order-1 md:order-none">
            <a href="/"><img src="{{ asset('jihlogo.svg') }}" class="w-[300px] md:w-[500px]" alt="logo"></a>
        </div>
            <div class="menu  md:flex hidden md:flex-row flex-col justify-evenly text-xl font-bold ">
                <a href="/" class="mx-5">Home</a> --}}
    {{-- <a href="#" class="mx-5">About</a>
                @if (App\Models\Scholarship::latest()->first()->status == true)
                    <a href="/terms" class="mx-5">Apply</a>
                    <a href="/login" class="mx-5">Login</a>
                @endif
                <a href="#" class="mx-5">Contact</a>

            </div>
        </div>
    </div> --}}

    <div class="bg-white">
        <div
            class="mainheader md:h-20 flex flex-col md:flex-row justify-between items-center container mx-auto text-[#4A51A3]">
            <!-- Center logo -->
            <div class="w-full md:w-auto flex justify-center py-5 order-1 md:order-none">
                <img src="{{ asset('jihlogo.svg') }}" class="w-[300px] md:w-[500px]" alt="logo">
            </div>

            <!-- Right menu -->
            <div class="menu hidden md:flex flex-row justify-evenly text-xl font-bold order-2 md:order-none">
                @if (App\Models\Scholarship::latest()->first()->status == true)
                    <a href="/login" class="mx-5">Login</a>
                @endif
            </div>
        </div>
    </div>

</header>
