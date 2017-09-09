@extends('main')

@section('content')
    <div class="row" style="margin-top: 5vh;">

        <div class="col"></div>

        <div class="col-4">

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">Login</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember Me</span>
                            </label>

                        </div>

                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                        {{--Forgot Your Password?--}}
                        {{--</a>--}}

                        <button type="submit" class="btn btn-success btn-block">Login</button>

                    </form>

                </div>
            </div>

        </div>

        <div class="col"></div>


@endsection
