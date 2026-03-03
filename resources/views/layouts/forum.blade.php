<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'My New Forum')</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}" />
</head>
<body>

<div id="wrapper">

    <!-- Header -->
    @include('forum.partials.header')

    <!-- Navbar -->
    @include('forum.partials.navbar')

    <!-- Page body -->
    <div id="pagebody">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('forum.partials.footer')

</div>

</body>
</html>