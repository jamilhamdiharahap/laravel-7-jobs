@extends('layouts.app_home')
@section('content')
<section class="inner-banner" style="backend:#242c36 url(..)no-repeat;">
    <img src="asset/images/image-gallery/jobs.jpg" alt="">
    <div class="container">
        <div class="caption">
            <h2>Details</h2>
            <p>Companies Details<span> 1000 New job</span></p>
        </div>
    </div>
</section>
<section class="profile-detail">
    <div class="container">
        <div class="col-md-12">
            @foreach ($profils as $profil)
            <div class="row" style="margin: 10px">
                <div class="basic-information">
                    <div class="col-md-3 col-sm-3">
                     <img src="asset/images/image-gallery/{{ $profil->companies->logo }}" height="80" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="profile-content">
                                <h2>{{ $profil->companies->name }}<span>{{ $profil->title }}</span></h2>
                                <ul class="information">
                                    <li><span>Address:</span>{{ $profil->address }}</li>
                                    <li><span>Website:</span>{{  $profil->website }}</li>
                                    <li><span>Employee:</span>{{  $profil->employee }} employer</li>
                                    <li><span>Mail:</span>{{ $profil->companies->email }}</li>
                                    <li><span>SInce:</span>{{ $profil->since }}</li>
                                </ul>
                            </div>
                        </div>
                    <ul class="social" style="margin-left: 32%">
                        <li><a href="{{ $profil->fb }}" class="facebook"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a href="{{ $profil->tw }}" class="twitter"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a href="{{ $profil->ig }}" class="instagram"><i class="fa fa-instagram"></i>Instagram</a></li>
                    </ul>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-user fa-fw"></i> About {{ $profil->companies->name }}
                        </div>
                                            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p>{{ $profil->tentang }}.</p>
                        </div>
                    </div>
                    <div style="width: 15rem;margin-left:85%">
                        <a href="{{ route('lamaran.index') }}" class="btn view-job" name="View Job">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div style="display: flex;justify-content:center">
        {{ $profils->links() }}
    </div>
</section>
@stop
