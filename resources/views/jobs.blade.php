@extends('layouts.app_home')
@section('content')
<section class="inner-banner" style="backend:#242c36 url(..)no-repeat;">
    <img src="asset/images/image-gallery/jobs.jpg" alt="">
    <div class="container">
        <div class="caption">
            <h2>Jobs</h2>
            <p>apply now in the best company</p>
        </div>
    </div>
</section>
<section class="jobs">
    <div class="container">
        <div class="row heading">
            <h2>Search Your Job</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
        {{-- <div class="row top-pad">
            <div class="filter">
                <div class="col-md-2 col-sm-3">
                    <p>Search By:</p>
                </div>

                <div class="col-md-10 col-sm-9 pull-right">
                        <ul class="filter-list">
                            <li>
                                <input id="checkbox-1" class="checkbox-custom" value="jaljlajd"  name="id" type="checkbox" checked="">
                                <label for="checkbox-1" class="part-time checkbox-custom-label">Part Time</label>
                            </li>
                            <li>
                                <input id="checkbox-2" class="checkbox-custom" value="uikhajsa" name="id" type="checkbox">
                                <label for="checkbox-2" class="full-time checkbox-custom-label">Full Time</label>
                            </li>
                            <li>
                                <input id="checkbox-3" class="checkbox-custom" value="3jahkjai" name="id" type="checkbox">
                                <label for="checkbox-3" class="freelancing checkbox-custom-label">Freelancing</label>
                            </li>
                            <li>
                                <input id="checkbox-4" class="checkbox-custom" value="uthajsad" name="id" type="checkbox">
                                <label for="checkbox-4" class="internship checkbox-custom-label">Internship</label>
                            </li>
                        </ul>
                </div>
            </div>
        </div> --}}

        @foreach ($lowongan as $jobs)
        {{-- <div class="companies">
            <div class="company-list">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="company-logo">
                            <img src="asset/images/image-gallery/{{ $jobs->company->logo }}" class="img-responsive"  width="200" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="company-content">
                            <h3>{{ $jobs->jobsType->name }}</h3>
                            <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <button type="submit" class="btn view-job" name="View Job">View Job</button>
                    </div>
                </div>
            </div>
        </div> --}}
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
                                <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="company-location"><i class="fa fa-map-marker"></i> 07th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                            </div>
                            <style>
                                #hovers>a:hover{
                                    background-color: #54E346;
                                }
                            </style>
                            <div style="width: 11rem" id="hovers">
                                <a href="{{route('lamaran.show',$jobs->company->id)}}"  class="btn view-job"name="View Job">Apply</a>
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
                                <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                            </div>
                            <style>
                                #hovers>a:hover{
                                    background-color: #54E346;
                                }
                            </style>
                            <div style="width: 11rem" id="hovers">
                                <a href="{{route('lamaran.show',$jobs->company->id)}}"  class="btn view-job"name="View Job">Apply</a>
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
                                <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                            </div>
                            <style>
                                #hovers>a:hover{
                                    background-color: #54E346;
                                }
                            </style>
                            <div style="width: 11rem" id="hovers">
                                <a href="{{route('lamaran.show',$jobs->company->id)}}"  class="btn view-job"name="View Job">Apply</a>
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
                                <p><span class="company-name"><i class="fa fa-briefcase"></i>{{ $jobs->company->name }}</span><span class="company-location"><i class="fa fa-map-marker"></i>{{ $jobs->profils->address }}</span><span class="package"><i class="fa fa-money"></i>RP.@php echo number_format($jobs->salary,2,',','.') @endphp</span></p>
                            </div>
                            <style>
                                #hovers>a:hover{
                                    background-color: #54E346;
                                }
                            </style>
                            <div style="width: 11rem" id="hovers">
                                <a href="{{route('lamaran.show',$jobs->company->id)}}"  class="btn view-job"name="View Job">Apply</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        </div>
        @endforeach
        <div class="row">
            <div class="d-flex justify-content-center">
                {!! $lowongan->links() !!}
            </div>
        </div>
    </div>
</section>
@stop
