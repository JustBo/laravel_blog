<div class="panel-heading text-center">Login</div>
<form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
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
