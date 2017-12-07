<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    @include('inc.navbar')
    <main>
      @yield('content')
    </main>
    @include('inc.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
  </body>
</html>
