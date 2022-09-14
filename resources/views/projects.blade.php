@extends('layouts.app')

@section('content')
<!-- Banner Title -->
<div class="ready banner-padding bg-img" data-overlay-dark="0" data-background="{{ asset('assets/images/banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="title animate-box" data-animate-effect="fadeInUp">
                            <h1>PROJECTS</h1>
                        </div>
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
                        <div class="col-md-7 mb-30">
                            <p>{!! $project_contents->contents !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <ul class="arcprime-project-filter">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".interior">Interior</li>
                    <li data-filter=".exterior">Exterior</li>
                    <li data-filter=".urban">Urban</li>
                </ul>
            </div>
            <div class="row arcprime-project-items">
                @foreach($projects as $value)
                    <div class="col-md-6 single-item {{ $value->project_category }}">
                        <div class="arcprime-project-wrap">
                            <a href="{{ url('/project/details/'. $value->id) }}">
                                <img src="{{ Storage::disk('s3')->url($image_path.$value->project_banner_image) }}" alt="">
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
        </div>
    </div>
@endsection
