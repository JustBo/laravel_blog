    <div class="panel-heading text-center">Register</div>
    <form id="registerform" class="form-horizontal" method="POST" action="{{ route('register') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="register" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="password-register" type="password" class="form-control" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
        </div>

        <div class="form-group text-center">
            <div class="col-md-12">
              <button type="submit" class="btn login-btn register-btn">
                  Register
              </button>
            </div>
        </div>
    </form>
