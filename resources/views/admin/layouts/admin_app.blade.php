<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin dashboard</title>
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('admin.inc.sidebar')
    @yield('content')
  </body>
</html>
