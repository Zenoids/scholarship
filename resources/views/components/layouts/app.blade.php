<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
    <script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
    @yield('scripts')
</html>
