@extends('layouts.app')

@section('content')
  <!-- Banner Title -->
@if($about_contents->about_banner_image)
    <div class="ready banner-padding bg-img" data-overlay-dark="0" data-background="{{ Storage::disk('s3')->url($image_path.$about_contents->about_banner_image) }}">
@else
    <div class="ready banner-padding bg-img" data-overlay-dark="0" data-background="{{ Storage::disk('s3')->url('uploads/placeholder.png') }}">
@endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="title animate-box" data-animate-effect="fadeInUp">
                            <h1>ABOUT US</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-30 animate-box" data-animate-effect="fadeInLeft">
                    <span>Who We Are</span>
                    <h2>About <br><b>Pwoods Interors</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-3"> <span class="line-one animate-box" data-animate-effect="fadeInLeft"></span> </div>
                        <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                            {!! isset($about_contents->about_content) ? $about_contents->about_content : '' !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="arcprime-about-img animate-box" data-animate-effect="fadeInLeft">
                        <div class="img"> 
                            @if($about_contents->about_content_image)
                                <img oncontextmenu="return false" onselectstart="return false" ondragstart="return false" src="{{ Storage::disk('s3')->url($image_path.$about_contents->about_content_image) }}" alt="abt_image"> 
                            @else
                                <img oncontextmenu="return false" onselectstart="return false" ondragstart="return false" src="{{ Storage::disk('s3')->url('uploads/placeholder.png') }}" alt="abt_image"> 
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MD -->
    <div class="container-fluid md rem-pad">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-sm-5 col-12">
                    @if($about_contents->director_image)
                        <img src="{{ Storage::disk('s3')->url($image_path.$about_contents->director_image) }}" class="img-fluid mx-auto d-block" alt="">
                    @else
                        <img src="{{ Storage::disk('s3')->url('uploads/placeholder.png') }}" class="img-fluid mx-auto d-block" alt="">
                    @endif
                </div>
                <div class="col-md-7 col-sm-7 col-12">
                    {!! isset($about_contents->director_content) ? $about_contents->director_content : '' !!}
                </div>
            </div>
        </div>
    </div>
    <!-- MD end here -->

    <!-- Team -->
    <!-- <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-30 animate-box" data-animate-effect="fadeInLeft"> <span>Architect</span>
                    <h2>Meet Our <b>Team</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-holder animate-box" data-animate-effect="fadeInLeft">
                        <div class="team-image-holder"> <img src="images/team/01.jpg" class="img-fluid" alt="">
                            <div class="team-side-info">
                                <h4 class="team-name">Fiona Velva </h4>
                                <h6 class="team-position">Architect</h6>
                            </div>
                        </div>
                        <p>dipl. Arch ETH/SIA</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-holder animate-box" data-animate-effect="fadeInLeft">
                        <div class="team-image-holder"> <img src="images/team/02.jpg" class="img-fluid" alt="">
                            <div class="team-side-info">
                                <h4 class="team-name">Carina Dourif </h4>
                                <h6 class="team-position">Architect</h6>
                            </div>
                        </div>
                        <p>dipl. Arch FH</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-holder animate-box" data-animate-effect="fadeInLeft">
                        <div class="team-image-holder"> <img src="images/team/03.jpg" class="img-fluid" alt="">
                            <div class="team-side-info">
                                <h4 class="team-name">Robert Caine </h4>
                                <h6 class="team-position">Architect</h6>
                            </div>
                        </div>
                        <p>M.A. FH in Architecture</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Partners -->
    <div class="partner section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-30 animate-box" data-animate-effect="fadeInLeft"> <span>Our Partners</span>
                    <h2>{!! isset($about_partners->partners_title) ? $about_partners->partners_title : '' !!}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            {!! isset($about_partners->partners_content) ? $about_partners->partners_content : '' !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="item"> <img src="{{ asset('assets/images/logos/1.png') }}" alt="image"> </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item"> <img src="{{ asset('assets/images/logos/2.png') }}" alt="image"> </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item"> <img src="{{ asset('assets/images/logos/3.png') }}" alt="image"> </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item no-bord"> <img src="{{ asset('assets/images/logos/4.png') }}" alt="image"> </div>
                        </div>
                        <div class="bord col-md-12"></div>
                        <div class="col-md-3">
                            <div class="item"> <img src="{{ asset('assets/images/logos/5.png') }}" alt="image"> </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item"> <img src="{{ asset('assets/images/logos/6.png') }}" alt="image"> </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item"> <img src="{{ asset('assets/images/logos/7.png') }}" alt="image"> </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item no-bord"> <img src="{{ asset('assets/images/logos/8.png') }}" alt="image"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
