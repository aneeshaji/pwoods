@extends('layouts.app')

@section('content')
 <!-- Banner Title -->
@if($service_main_contents->banner_image)
    <div class="ready banner-padding bg-img" data-overlay-dark="0" data-background="{{ Storage::disk('s3')->url($image_path.$service_main_contents->banner_image) }}">
@else
    <div class="ready banner-padding bg-img" data-overlay-dark="0" data-background="{{ Storage::disk('s3')->url('uploads/placeholder.png') }}">
@endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <div class="title animate-box" data-animate-effect="fadeInUp">
                            <h1>Interior Design</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    <div class="section-padding arcprime-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInLeft"> <span>WHAT WE DO</span>
                    <h2>{{ isset($service_details->first_content_title) ? $service_details->first_content_title : '' }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 animate-box" data-animate-effect="fadeInLeft"> <span class="line-one"></span> </div>
                        <div class="col-md-8 mb-30 animate-box" data-animate-effect="fadeInLeft">
                            {!! isset($service_details->first_content) ? $service_details->first_content : '' !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row titlehead">
                <h2>{{ isset($service_details->second_content_title) ? $service_details->second_content_title : '' }}</h2>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-10 animate-box" data-animate-effect="fadeInLeft">
                            {!! isset($service_details->second_content) ? $service_details->second_content : '' !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="arcprime-about-img animate-box" data-animate-effect="fadeInLeft">
                        <div class="img"> 
                        	<img oncontextmenu="return false" onselectstart="return false" ondragstart="return false" src="{{ Storage::disk('s3')->url($image_path.$service_details->second_content_image) }}" alt=""> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project -->
    <div class="section-padding">
        <div class="container">
            <div class="row mt-30">
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$service_details->feature_image_name_1) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$service_details->feature_image_name_1) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                            <h3>{{ isset($service_details->feature_image_title_1) ? $service_details->feature_image_title_1 : '' }}</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$service_details->feature_image_name_2) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$service_details->feature_image_name_2) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                            <h3>{{ isset($service_details->feature_image_title_2) ? $service_details->feature_image_title_2 : '' }}</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$service_details->feature_image_name_3) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$service_details->feature_image_name_3) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                            <h3>{{ isset($service_details->feature_image_title_3) ? $service_details->feature_image_title_3 : '' }}</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection