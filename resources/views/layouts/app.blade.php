<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('layouts._head')

<body>
    @include('layouts._nav')

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
  <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <div id="app">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <nav class="navbar navbar-default navbar-static-top">
        </div>
            <div class="container"><br>
        @yield('content')
    </div>

    @include('layouts._footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
