<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
