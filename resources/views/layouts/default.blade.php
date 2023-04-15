<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>repeach.</title>

    @vite('resources/css/app.css')
</head>

<body class="subpixel-antialiased font-medium snap-mandatory snap-y">
    @include('components.layouts.default.navigation')
    @yield('BODY')
    @include('components.layouts.default.footer')
</body>

</html>
