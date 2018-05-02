@extends('layouts.app')

@section('body-class', 'full-screen login')

@section('content')


<!--  -->

<div class="wrapper">
    <div class="page-header" style="background-image: url(' {{ asset('img/sections/bruno-abatti.jpg') }}');">
        <div class="filter"></div>
        <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1 ">
                        <div class="card card-register">
                            <h3 class="card-title">{{ __('Login') }}</h3>
                            <form method="POST" class="register-form" action="{{ route('login') }}">
                                @csrf

                                <label>{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <label>{{ __('Password') }}</label>
                                <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} no-border" placeholder="Password" required>

                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox1">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                
                                <button type="submit" class="btn btn-danger btn-block btn-round">{{ __('Login') }}</button>
                            </form>
                                <a href="" class="">¿Es padre? Haga click aquí si no recuerda su contraseña.</a>
                            <!-- <div class="forgot">
                                <a href="{{ route('password.request') }}" class="btn btn-link btn-danger">Forgot Your Password?</a>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        <div class="demo-footer register-footer text-center">
                <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
        </div>
    </div>
</div>


@endsection
