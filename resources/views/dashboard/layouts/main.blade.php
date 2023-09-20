<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>

        <script src="../assets/js/color-modes.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="RSU Sari Mutiara Lubuk Pakam">
        <meta name="author" content="Daniel Ryan Hamonangan Sitompul">
        <title>Dashboard | SarMut Blog</title>
        
        <!-- FRAMEWORK BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
        
        <!-- ICON BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

        <!-- CUSTOM CSS -->
        <link href="/css/dashboard.css" rel="stylesheet">

        {{-- TRIX EDITOR UNTUK POSTINGAN --}}
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <style>
            trix-toolbar [data-trix-button-group='file-tools']
            {
                display: none;
            }
        </style>

    </head>
    <body>

        @include('dashboard.layouts.header')
        
        <div class="container-fluid">
            <div class="row">

                @include('dashboard.layouts.sidebar')
          
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('container')
                </main>
            </div>
        </div>

        <!-- SCRIPT BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
        
        {{-- SCRIPT CHAT --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
        
        {{-- SCRIPT ICON --}}
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        {{-- CUSTOM SCRIPT --}}
        <script src="/js/dashboard.js"></script>

        {{-- TRIX EDITOR UNTUK POSTINGAN --}}
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    </body>
</html>
