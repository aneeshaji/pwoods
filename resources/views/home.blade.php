@extends('layouts.app')

@section('content')
<!-- Slider -->
<div class="arcprime-homepage-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="arcprime-slider">
                        <div class="arcprime-slider-item">
                            <a href="">
                                <img class="arcprime-slider-img" src="{{ Storage::disk('s3')->url($banner_image_path.$banner_images->first_banner_image_name) }}" alt="">
                                <div class="arcprime-slider-caption">
                                    <div class="arcprime-slider-title">Interior <b>design</b></div>
                                </div>
                            </a>
                        </div>
                        <div class="arcprime-slider-item">
                            <a href="">
                                <img class="arcprime-slider-img" src="{{ Storage::disk('s3')->url($banner_image_path.$banner_images->second_banner_image_name) }}" alt="">
                                <div class="arcprime-slider-caption">
                                    <div class="arcprime-slider-title">Furniture <b>Manufacturing</b>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->
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
                        <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">{!! isset($about_contents->about_content) ? $about_contents->about_content : '' !!}
                            <a href="{{ url('/about-us') }}" class="more-btn">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="arcprime-about-img animate-box" data-animate-effect="fadeInLeft">
                        <div class="img"> <img src="{{ Storage::disk('s3')->url($about_image_path.$about_contents->about_image) }}" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-30 animate-box" data-animate-effect="fadeInLeft">
                    <span>DISCOVER</span>
                    <h2>Our Latest <br><b>Projects</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2"> <span class="line-one"></span> </div>
                        <div class="col-md-8 mb-30">
                            {!! isset($project_contents->project_content) ? $project_contents->project_content : '' !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <ul class="arcprime-project-filter">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".interior">Interior</li>
                    <li data-filter=".exterior">Exterior</li>
                    <li data-filter=".furniture">Furniture</li>
                </ul>
            </div>
            <div class="row arcprime-project-items">
               @foreach($projects as $value)
                    <div class="col-md-6 single-item {{ $value->project_category }}">
                        <div class="arcprime-project-wrap">
                            <a href="{{ url('/project/details/'. $value->id) }}">
                                <img src="{{ Storage::disk('s3')->url($project_image_path.$value->project_banner_image) }}" alt="">
                            </a>
                            <div class="arcprime-project-content">
                                <p>01.Project</p>
                                <h3><a href="{{ url('/project/details/'. $value->id) }}">{{ isset($value->project_name) ? $value->project_name : '' }}</a></h3>
                                <a href="{{ url('/project/details/'. $value->id) }}" class="arcprime-project-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <a href="{{ url('/projects') }}" class="more-btn">View all</a>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="container-fluid cta">
        <div class="container">
            <h2>{{ isset($contact_banner_contents->title) ? $contact_banner_contents->title : '' }}</h2>
            <p>{!! isset($contact_banner_contents->content) ? $contact_banner_contents->content : '' !!}</p>
            <a href="{{ url('/contact') }}" target="_blank" class="more-btn">Contact Us</a>
        </div>
    </div>
    <!-- CTA end here -->

    <!-- Testimonial -->
    <div class="container-fluid testimonials rem-pad text-center">
        <div class="container">
            <span>Testinomials</span>
            <h2>What Our <b>Clients Say?</b></h2>
            <div class="col 12" id="test-slider">
                @foreach($testimonials as $value)
                    <div>
                        <img src="{{ asset('assets/images/quote.svg') }}" class="mx-auto d-block img-fluid" alt="">
                        <p>{!! isset($value->content) ? $value->content : '' !!}</p>
                         <h4>{{ isset($value->author_name) ? $value->author_name : '' }}<span>{{ isset($value->author_designation) ? $value->author_designation : '' }}</span></h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial end here -->
@endsection
