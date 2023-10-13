    @extends('welcome')

    @section('content')
   <div class="owl-carousel w-full  bg-[#4A51A3] h-[500px]">
        <div class="relative bg-center  bg-no-repeat flex justify-center items-center h-[500px] bg-cover"
            style="background-image: url({{ asset('light.jpg') }})">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <h2 class="text-4xl text-white font-bold relative z-10">JIH SCHOLARSHIP PORTAL</h2>
        </div>
        <div class="relative bg-center  bg-no-repeat flex justify-center items-center h-[500px] bg-cover"
            style="background-image: url({{ asset('masjid.jpg') }})">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <h2 class="text-4xl text-white font-bold relative z-10">For All Eligible UG and PG students</h2>
        </div>
    </div>
@endsection

    @section('scripts')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 5000,
                loop: true,
                autoplayHoverPause: false,
                items: 1
            });

        });
    </script>
    @endsection
