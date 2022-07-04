	<!-- Navigation Start  -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img src="asset_user/img/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                        @if (session('login'))
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('lamaran.index') }}">Jobs</a></li>
                                <li><a href="{{ route('company') }}">Companies</a></li>
                                <li><a href="{{ route('detail') }}">Detail</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun</a>
                                <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                                    <li><a href="{{ route('logoutuser') }}">Sign Out</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('company') }}">Companies</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akun</a>
                                <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                                    <li class="active"><a href="{{ route('login') }}">Sign In</a></li>
                                    <li class="active"><a href="{{ route('register') }}">Sign Up</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Navigation End  -->
