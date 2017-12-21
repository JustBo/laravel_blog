<div class="panel-heading text-center">Login</div>
<form id="loginform" class="form-horizontal" method="POST" action="{{ route('api.login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail" required autofocus>
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
    </div>
    <div class="form-group">
      <div class="col-md-12">
        <span class="errors login-error help-block">
  
        </span>
      </div>

    </div>
    <div class="form-group text-center">
        <div class="col-md-12">
          <button type="submit" class="btn login-btn">
              Login
          </button>
        </div>
    </div>
    <div>
      <div class="pull-left"></div>
      <a href="{{ route('facebook.redirect') }}" class="facebook-login"><span><i class="fa fa-facebook"></i></span>Login with Facebook</a>
    </div>
</form>
