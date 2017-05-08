<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
<body>
  @include('layouts._nav')
  @include('layouts._footer')

<!-- Placed at the end of the document so the pages load faster ============================================= -->
  @include('layouts._script')
</body>

<html>
    <head>
        <meta charset="utf-8">

        <title>{{ $title or "Book rental shop" }}</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layouts._navbar')
        <div class="container">
            @yield('content')
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
        @yield('script')
    </body>
</html>
