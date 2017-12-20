<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    @include('inc.navbar')
    <main>
      @yield('content')
      @include('inc.modals')
    </main>

    @include('inc.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
  </body>
</html>
