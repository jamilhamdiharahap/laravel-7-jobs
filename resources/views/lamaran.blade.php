@extends('layouts.app_home')
@section('content')
{{-- <section class="inner-banner" style="buttom:-260px;" style="backend:#242c36 url(..)no-repeat;">
    <div class="container">
        <div class="caption" style="top:-260px">
            <h2>Jobs</h2>
            <p>apply now in the best company</p>
        </div>
    </div>
</section> --}}
    <section class="profile-detail" style="padding: 40px 40px">
        <div class="container" style="padding-bottom: 80px">
            <div style="display: flex;justify-content: center;margin:4%">
                <iframe src="https://embed.lottiefiles.com/animation/81562" style="background: transparent"></iframe>
            </div>
            <form method="post" action="{{ route('lamaran.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label style="margin-left: 4px" for="">Apply To</label>
                        <input type="text" value="{{ $data->email }}" readonly  name="to" class="form-control input-lg" required>
                    </div>
                    {{-- <div class="col-md-6">
                            <label style="margin-left: 4px" for="">Email</label>
                            <input type="text" value="{{ $from }}" name="email" class="form-control input-lg" required>
                        </div> --}}
                    <div class="col-md-6">
                        <label style="margin-left: 4px" for="">YOUR CV</label>
                        <input type="file" name="cv" class="form-control input-lg" required>
                    </div>
                </div>
                @if (session('message'))
                    <div>
                        {{ session('message') }}
                    </div>
                @endif

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
                <button type="submit" style="background-color: #0d6efd;border-color:#0d6efd;" class="btn btn-primary">Send Cv</button>
            </form>
        </div>
    </section>
@stop
