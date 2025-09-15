<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6VHJGM9EB5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6VHJGM9EB5');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>JIH Scholarship</title>

    <!-- Scripts -->

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased">
    <livewire:header />
    {{-- <livewire:hero-carousel /> --}}
    {{-- <div class="owl-carousel w-full  bg-[#4A51A3] h-screen"> --}}
    <div class="owl- w-full  bg-[#4A51A3] h-[82vh]">
        {{-- <div class="relative bg-center display:none  bg-no-repeat flex flex-col justify-center items-center h-[81vh] bg-cover"
            style="background-image: url({{ asset('light.jpg') }})"> style="background-image: url({{ asset('masjid.jpg') }})">
            <div class="absolute inset-0   bg-black opacity-50"></div>
            <h2 class="text-4xl text-center text-white font-bold relative mx-3 z-10">JIH SCHOLARSHIP PORTAL</h2>
            @if (App\Models\Scholarship::latest()->first()->status == true)
                <p class="text-4xl text-white text-center font-bold relative mx-5 z-10">Now Open for
                    {{ App\Models\Scholarship::latest()->first()->name }}</p>
                <p class="text-2xl text-white text-center relative mx-5 my-2 z-10 p-2 rounded"
                    style="background: rgb(74 81 163);">
                    <u>
                        {{ App\Models\Scholarship::latest()->first()->description }}</u>
                </p>
                <a href="/terms"> <button
                        class="text-4xl text-[#4A51A3] font-bold mx-5 relative z-10 rounded-xl p-4  mt-5 bg-white">
                        Apply Now</button></a>
            @else
                <p class="text-4xl text-white text-center font-bold relative mx-5 z-10">Applications for
                    {{ App\Models\Scholarship::latest()->first()->name }} are closed for now!</p>
            @endif

            <p class="absolute bottom-5 left-0 right-0 text-2xl text-white mx-5 text-center lg:z-10">The
                applications of students who
                applied previosuly are under review,<br> once reviewed applicants will be notified or contacted on
                registered mail or phone</p>
        </div> --}}
        <div class="relative bg-center bg-no-repeat flex flex-col justify-center items-center h-[81vh] bg-cover"
            style="background-image: url({{ asset('masjid.jpg') }})">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Title -->
            <h2 class="text-4xl sm:text-3xl md:text-4xl text-center text-white font-bold relative mx-3 z-10">
                JIH SCHOLARSHIP PORTAL
            </h2>

            @if (App\Models\Scholarship::latest()->first()->status == true)
                <!-- Open Scholarship -->
                <p
                    class="text-2xl sm:text-2xl md:text-3xl lg:text-4xl text-white text-center font-bold relative mx-5 z-10 mt-2">
                    Now Open for {{ App\Models\Scholarship::latest()->first()->name }}
                </p>

                <p class="text-lg sm:text-lg md:text-xl lg:text-2xl text-white text-center relative mx-5 my-2 z-10 p-2 rounded"
                    style="background: rgb(74 81 163);">
                    <u>{{ App\Models\Scholarship::latest()->first()->description }}</u>
                </p>

                <a href="/terms">
                    <button
                        class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold mx-5 relative z-10 rounded-xl px-4 py-2 sm:px-6 sm:py-3 mt-5 bg-white text-[#4A51A3]">
                        Apply Now
                    </button>
                </a>
            @else
                <!-- Closed Scholarship -->
                <p
                    class="text-xl sm:text-2xl md:text-3xl lg:text-4xl text-white text-center font-bold relative mx-5 z-10 mt-2">
                    Applications for {{ App\Models\Scholarship::latest()->first()->name }} are closed for now!
                </p>
            @endif

            <!-- Bottom Info -->
            <p
                class="absolute bottom-5 left-0 right-0 text-lg sm:text-base  md:text-lg lg:text-2xl text-white mx-3 sm:mx-5 text-center z-10">
                The applications of students who applied previously are under review,<br class="hidden sm:block">
                once reviewed applicants will be notified or contacted on registered mail or phone.
            </p>
        </div>

        {{-- <div class="relative bg-top  bg-no-repeat flex justify-center items-center h-[82vh] bg-cover"
            style="background-image: url({{ asset('academics-wisdom-literacy-study-icon-1.jpg') }})">
            style="background-image: url({{ asset('Scholarhsip.jpg') }})">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <h2 class="text-4xl text-white font-bold mx-5 text-center relative z-10">The applications of students who
                applied previosuly are under review,<br> once reviewed applicants will be notified or contacted on
                registered mail or phone </h2>
        </div> --}}
    </div>


    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 5000,
                loop: true,
                autoplayHoverPause: false,
                items: 1,
                // nav: false,
                dots: false,
            });

        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65546d8dcec6a912820ff782/1hf8snsqb';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <livewire:footer />
</body>

</html>
