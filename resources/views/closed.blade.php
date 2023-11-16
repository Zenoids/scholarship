<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-6VHJGM9EB5"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-6VHJGM9EB5");
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="{{asset('owlcarousel/owl.carousel.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('owlcarousel/owl.theme.default.min.css')}}"
    />
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}" />
    <title>JIH Scholarship</title>

    <!-- Scripts -->

    <!-- {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <body class="antialiased">
    <div class="flex items-center justify-center h-screen">
      <div>
        <div class="flex flex-col items-center space-y-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="text-red-600 w-28 h-28"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="1"
          >
            <!-- Circle -->
            <circle
              cx="12"
              cy="12"
              r="11"
              stroke="currentColor"
              fill="none"
              stroke-width="1"
            />

            <!-- Wrong Arrow -->
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>

          <h1 class="text-4xl font-bold">Application closed!</h1>
          <p>
            We appreciate your interest, but the scholarship application is
            currently closed.
          </p>
          <p>
            If you have any questions or need further assistance, feel free to
            contact us at contact information.
          </p>
          {{-- <p>
            If you want to fill another application, kindly logout from current
            user and apply,
          </p> --}}
          <a
            href="/"
            class="inline-flex items-center px-4 py-2 text-white bg-indigo-600 border border-indigo-600 rounded rounded-full hover:bg-indigo-700 focus:outline-none focus:ring"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-3 h-3 mr-2"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M7 16l-4-4m0 0l4-4m-4 4h18"
              />
            </svg>
            <span class="text-sm font-medium"> Home </span>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
