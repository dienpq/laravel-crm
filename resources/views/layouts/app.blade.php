<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Customer Connect</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- date-picker --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">

    @yield('styles')
</head>

<body>
    <div id="app">
        @include('blogs.header')
        @include('blogs.slidebar')

        <main class="p-4" style="margin-top: 55px; margin-left: 240px">
            @yield('content')
        </main>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    {{-- <script>
        $(function() {
            $('a.nav-link').filter(function() {
                return this.href == location.href;
            }).addClass('active');
        });
    </script> --}}
    @yield('scripts')
</body>

</html>
