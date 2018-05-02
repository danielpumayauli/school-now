@extends('layouts.app')

@section('body-class', 'full-screen login')

@section('content')




<div class="wrapper">
    <div class="page-header" style="background-image: url(' {{ asset('img/sections/bruno-abatti.jpg') }}');">
        <div class="filter"></div>
        <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1 ">
                        <div class="card card-register">
                            <div class="card-title" style="color: white">{{ __('Reset Password') }}</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                        <button type="submit" class="btn btn-danger btn-block btn-round">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                </form>
                            </div>

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
