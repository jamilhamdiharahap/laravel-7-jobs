@extends('layouts.app_home')
@section('content')
<section class="login-wrapper">
    <div class="container">
        <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
            <form action="{{ route('registerUser') }}" method="POST">
                @csrf
                <img class="img-responsive" alt="logo" src="asset_user/img/logo.png">
                <input type="text" name="name" class="form-control input-lg" placeholder="Name" required>
                <input type="email" name="email" class="form-control input-lg" placeholder="Email" required>
                <input type="password" name="password" class="form-control input-lg" placeholder="Password" required>

                    @if (session('message'))
                        <div>
                            {{ session('message') }}
                        </div>
                    @endif
                <button type="submit" class="btn btn-primary">Sign up</button>
            </form>
        </div>
    </div>
</section>
@stop
