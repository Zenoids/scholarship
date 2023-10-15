<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('owlcarousel/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('owlcarousel/owl.theme.default.min.css')}}">
<link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">
        <title>{{ $title ?? 'JIH Scholarship' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
    <script src={{asset('jquery.min.js')}} ></script>
<script src={{asset('owlcarousel/owl.carousel.min.js')}}></script>
    @yield('scripts')
</html>
