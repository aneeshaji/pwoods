@extends('layouts.app')

@section('content')
<!-- Banner Title -->
<div class="ready banner-padding bg-img" data-overlay-dark="0" data-background="{{ asset('assets/images/banner.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="title animate-box" data-animate-effect="fadeInUp">
                        <h1>Gallery</h1>
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
            @foreach($gallery as $value)
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$value->image_name) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$value->image_name) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                            <h3>{{ isset($value->image_title) ? $value->image_title : '' }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
