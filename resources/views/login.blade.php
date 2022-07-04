@extends('layouts.app_home')
@section('content')
<section class="login-wrapper">
    <div class="container">
        <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
            <form action="{{ route('postlogin1') }}" method="POST">
                @csrf
                <img class="img-responsive" loading="lazy" alt="logo" src="asset_user/img/logo.png">
                <div class="row">
                    <input type="text" name="email" class="form-control input-lg" placeholder="Email">
                    <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-12">
                                @if (session('message'))
                                    <div class="alert alert-danger">
                                        <strong>Oh snap!</strong> <a href="javascript:void(0);" class="alert-link">{{ session('message') }}</a>
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-info">
                                        <strong>OK !</strong> <a href="javascript:void(0);" class="alert-link">{{ session('success') }}</a>
                                    </div>
                                @endif
                                {{-- <a href="sign-up.html">Register Now!</a> --}}
                            </div>
                            {{-- <div class="col-xs-6 align-right">
                                <a href="forgot-password.html">Forgot Password?</a>
                            </div> --}}
                        </div>
                    <button type="submit" style="background-color: #0d6efd;border-color:#0d6efd;" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</section>
@stop
