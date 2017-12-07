@extends('admin.layouts.admin_auth')

@section('content')
  <div autocomplete="off" class="admin-login" style="background-image:url('{{ asset('images/main.jpg') }}')">
    <div class="panel">
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
                    <label for="userName" class="control-label">User Name</label>
                    <div>
                        <input id="userName" type="text" class="form-control" name="userName" value="{{ old('userName') }}" required autofocus>

                        @if ($errors->has('userName'))
                            <span class="help-block">
                                <strong>{{ $errors->first('userName') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>
                    <div>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

  </div>
@endsection
