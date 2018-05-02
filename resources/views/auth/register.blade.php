@extends('layouts.app')

@section('body-class', 'full-screen register')

@section('content')

<div class="wrapper">
    <div class="page-header" style="background-image: url('{{ asset('img/sections/soroush-karimi.jpg') }}');">
        <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-1 col-sm-7 col-xs-12">
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="description">
                                <h3>{{ __('Register') }}</h3>
                                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. Everything you need in a single case.</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-map-signs"></i>
                            </div>
                            <div class="description">
                                <h3> Clear Directions </h3>
                                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <div class="description">
                                <h3> We value your privacy </h3>
                                <p>Completely synergize resource taxing relationships via premier niche markets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="card card-register">
                            <h3 class="card-title text-center">Register</h3>
                            <div class="social">
                                <button href="#paper-kit" class="btn btn-just-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                <button href="#paper-kit" class="btn btn-just-icon btn-google"><i class="fa fa-google"></i></button>
                                <button href="#paper-kit" class="btn btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                            </div>

                            <div class="division">
                                <div class="line l"></div>
                                <span>or</span>
                                <div class="line r"></div>
                            </div>
                            <form class="register-form" method="POST" action="{{ route('register') }}">
                                @csrf

                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

                                <button type="submit" class="btn btn-block btn-round">
                                    {{ __('Register') }}
                                </button>
                            </form>
                            <div class="login">
                                <p>Already have an account? <a href="{{ route('login') }}">Log in</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="demo-footer text-center">
                <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
        </div>
    </div>
</div>
@endsection
