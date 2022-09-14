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
                            <h1>SERVICES</h1>
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
                    <h2>We provide quality<br />services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 animate-box" data-animate-effect="fadeInLeft"> <span class="line-one"></span> </div>
                        <div class="col-md-7 mb-30 animate-box" data-animate-effect="fadeInLeft">
                            {!! isset($service_main_contents->main_content) ? $service_main_contents->main_content : '' !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $value)
                    <div class="col-md-4">
                        <div class="item mb-30 animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon"><img src="{{ asset('assets/images/interior.svg') }}" class="iconsvg" alt=""></span>
                            <h5>{{ isset($value->main_title) ? $value->main_title : '' }}</h5>
                            <p>{!! Str::words($value->first_content, 30, ' ...') !!}</p>
                            <div class="row">
                                <a href="{{ url('/service/details/'. $value->id) }}" class="more-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
