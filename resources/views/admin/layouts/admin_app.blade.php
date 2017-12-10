<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin dashboard</title>
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('admin.inc.sidebar')
    <div class="admin-managment">
      <div class="container-fluid">
          @yield('content')
      </div>
    </div>
  </body>
</html>
