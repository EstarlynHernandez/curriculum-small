<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{asset('icons/dark/name.svg')}}" type="image/x-icon">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
    @yield('seo')

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&family=Roboto+Slab:wght@300;500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    @yield('content')
</body>

</html>
