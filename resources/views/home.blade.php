@extends('layouts.app_home')
@section('content')
		<section class="main-banner" style="background:#242c36 url(asset_user/img/slider-01.jpg) no-repeat">
			<div class="container">
				<div class="caption">
					<h2>JK JOBS</h2>
                    <p>warehouse of work in various fields</p>
				</div>
			</div>
		</section>

		<section class="features">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
						<h3>Create An Account</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
						<h3>Search Desired Job</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
						<h3>Send Your Resume</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
						<h3>Create An Account</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
						<h3>Search Desired Job</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
						<h3>Send Your Resume</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>

			</div>
		</section>

		<section class="counter">
			<div class="container">
				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
						<span aria-hidden="true" class="icon-briefcase"></span>
						<h3>{{ $countJobs }}</h3>
						<p>Jobs Posted</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
						<span class="box1"><span aria-hidden="true" class="icon-expand"></span></span>
						<h3>{{ $countCompany }}</h3>
						<p>All Companies</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
						<span class="box1"><span aria-hidden="true" class="icon-profile-male"></span></span>
						<h3>{{ $countUser }}</h3>
						<p>Total Members</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-3">
					<div class="counter-text">
					<span class="box1"><span aria-hidden="true" class="icon-sad"></span></span>
						<h3>2</h3>
						<p>Happy Members</p>
					</div>
				</div>
			</div>
		</section>

        <section class="jobs">
            <div class="container">
                <div class="row heading">
                    <h2>Company JOB</h2>
                    <p>Gabung sekarang dengan melamar di perusahaan kami</p>
                </div>
                @foreach ($lowonganhome as $jobs)
                <div class="companies">
                    @if ($jobs->jobsKtg->name == "Full Time")
                        <div class="company-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="company-logo">
                                        <img src="asset/images/image-gallery/{{ $jobs->company->logo }}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10" style="
                                    display: flex;
                                    flex-direction: column;
                                    align-items: end;
                                ">
                                    <div class="company-content" style="width: 100%">
                                        <h3>{{ $jobs->jobsType->name }}<span class="full-time">Full Time</span></h3>
                                        <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                                    </div>
                                    <div style="width: 11rem">
                                        <a href="{{ route('loginuser') }}" type="submit" class="btn view-job" name="View Job">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($jobs->jobsKtg->name == "Part Time")
                        <div class="company-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="company-logo">
                                        <img src="asset/images/image-gallery/{{ $jobs->company->logo }}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10" style="
                                    display: flex;
                                    flex-direction: column;
                                    align-items: end;
                                ">
                                    <div class="company-content" style="width: 100%">
                                        <h3>{{ $jobs->jobsType->name }}<span class="part-time">Part Time</span></h3>
                                        <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                                    </div>
                                    <div style="width: 11rem">
                                        <a href="{{ route('loginuser') }}" type="submit" class="btn view-job" name="View Job">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($jobs->jobsKtg->name == "Freelance")
                        <div class="company-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="company-logo">
                                        <img src="asset/images/image-gallery/{{ $jobs->company->logo }}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10" style="
                                    display: flex;
                                    flex-direction: column;
                                    align-items: end;
                                ">
                                    <div class="company-content" style="width: 100%">
                                        <h3>{{ $jobs->jobsType->name }}<span class="freelance">Freelance</span></h3>
                                        <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                                    </div>
                                    <div style="width: 11rem">
                                        <a href="{{ route('loginuser') }}" type="submit" class="btn view-job" name="View Job">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($jobs->jobsKtg->name == "Intership")
                        <div class="company-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="company-logo">
                                        <img src="asset/images/image-gallery/{{ $jobs->company->logo }}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10"  style="
                                    display: flex;
                                    flex-direction: column;
                                    align-items: end;
                                ">
                                    <div class="company-content" style="width: 100%">
                                        <h3>{{ $jobs->jobsType->name }}<span class="internship">Intership</span></h3>
                                        <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                                    </div>
                                    <div style="width: 11rem">
                                        <a href="{{ route('loginuser') }}" type="submit" class="btn view-job" name="View Job">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                @endforeach
                <div class="row">
                    <div class="d-flex justify-content-center">
                        {!! $lowonganhome->links() !!}
                    </div>
                </div>
            </div>
        </section>

		<section class="testimonials dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="testimonial-slider" class="owl-carousel">
							<div class="testimonial">
								<div class="pic">
									<img src="img/client-1.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">williamson</h3>
								<span class="post">Web Developer</span>
							</div>

							<div class="testimonial">
								<div class="pic">
									<img src="img/client-2.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>

							<div class="testimonial">
								<div class="pic">
									<img src="img/client-3.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>

							<div class="testimonial">
								<div class="pic">
									<img src="img/client-4.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="pricind">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-cog" aria-hidden="true"></i>
							<h3>Professional</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>3 Designs</li>
							<li>3 PSD Designs</li>
							<li>4 color Option</li>
							<li>10GB Disk Space</li>
							<li>Full Support</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>10<sub>/Month</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Sign Up</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<h3>Standard</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>3 Designs</li>
							<li>3 PSD Designs</li>
							<li>4 color Option</li>
							<li>10GB Disk Space</li>
							<li>Full Support</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>110<sub>/Month</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Sign Up</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-cube" aria-hidden="true"></i>
							<h3>Premium</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>3 Designs</li>
							<li>3 PSD Designs</li>
							<li>4 color Option</li>
							<li>10GB Disk Space</li>
							<li>Full Support</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>170<sub>/Month</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Sign Up</button>
					</div>
				</div>
			</div>
		</section>

		<section class="membercard dark">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-1.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar3.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Sazzel Shi</h5>
									<p class="text-muted">UX/ Designer</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-2.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar2.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Daniel Dezox</h5>
									<p class="text-muted">CEO Founder</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-3.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar1.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Silp Sizzer</h5>
									<p class="text-muted">Human Resource</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
					<h2>Want More Job & Latest Job? </h2>
					<p>Subscribe to our mailing list to receive an update when new Job arrive!</p>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Type Your Email Address...">
						<span class="input-group-btn">
							<button type="button" class="btn btn-default">subscribe!</button>
						</span>
					</div>
					</div>
				</div>
			</div>
		</section>
@stop
