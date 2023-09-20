<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FRAMEWORK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    @vite('resources/css/app.css')

    {{-- CSS UNTUK FORM LOGIN --}}
    <link href="/css/style.css" rel="stylesheet">

    {{-- CSS PRELOADER --}}
    <link href="/css/preloader.css" rel="stylesheet">

    {{-- TAILWIND --}}
    <link href="resources\css\tailwind.css" rel="stylesheet">

    {{-- FONT INTER --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    {{-- FONT DM SANS --}}
    <link href="/css/fonts.css" rel="stylesheet">

    {{-- ALPINE JS --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- JUDUL HALAMAN-->
    <title> {{ $title }} | RSU Sari Mutiara Pakam </title>

</head>

<body>

    {{-- PRELOADER --}}
    <div id="preloader"></div>

    <!-- PARTIAL VIEW - NAVBAR -->
    @include('profile.layouts.navbar.main')

    <!-- CHILD VIEW -->
    <div class="container mt-4">
        @yield('container')
    </div>

    {{-- PARTIAL VIEW - FOOTER --}}
    @include('profile.layouts.footer')

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    {{-- IONICON --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    {{-- SCRIPT PRELOADER --}}
    <script type="module" src="/js/preloader.js"></script>

</body>

</html>
