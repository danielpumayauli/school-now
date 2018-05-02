@extends('layouts.app')

@section('body-class', 'full-screen login')

@section('content')

<div class="wrapper">
    <div class="page-header" style="">
        <!-- <div class="filter"></div> -->
        <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1 ">
                        <div class="card card-register">
                            <div class="card-header">Dashboard</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                You are logged in!
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
