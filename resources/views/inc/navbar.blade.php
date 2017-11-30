<nav id="main-navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">Bohdan Tsybulskyi</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('home') ? 'active' : ''}}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{Request::is('projects') ? 'active' : ''}}"><a href="{{ route('projects') }}">Projects</a></li>
        <li class="{{Request::is('blog') ? 'active' : ''}}"><a href="{{ route('blog') }}">Blog</a></li>
        <li class="{{Request::is('about') ? 'active' : ''}}"><a href="{{ route('about') }}">About</a></li>
        <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact Me</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (!Auth::check())
          <li class="{{Request::is('login') ? 'active' : ''}}"><a href="{{ route('login') }}">Login</a></li>
          <li class="{{Request::is('register') ? 'active' : ''}}"><a href="{{ route('register') }}">Register</a></li>
        @else
          <li class="{{Request::is('user.logout') ? 'active' : ''}}"><a href="{{ route('user.logout') }}">Logout</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
