@extends('layouts.app')

@section('content')
<!-- Project Page -->
    <div class="arcprime-project-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ Storage::disk('s3')->url($image_path.$project_details->project_banner_image) }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-30 mt-30 animate-box" data-animate-effect="fadeInLeft">
                    <h2>{{ isset($project_details->project_name) ? $project_details->project_name : '' }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                   {!! isset($project_details->project_content) ? $project_details->project_content : '' !!}
                </div>
                <div class="col-md-4">
                    <p><b>Year : </b> {{ isset($project_details->project_year) ? $project_details->project_year : '' }}</p>
                    <p><b>Company : </b> {{ isset($project_details->project_company) ? $project_details->project_company : '' }}</p>
                    <p><b>Project Name : </b> {{ isset($project_details->project_name) ? $project_details->project_name : '' }}</p>
                    <p><b>Location : </b> {{ isset($project_details->project_location) ? $project_details->project_location : '' }}</p>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_1) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_1) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_2) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_2) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_3) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_3) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_4) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_4) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_5) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_5) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item animate-box" data-animate-effect="fadeInUp">
                    <a href="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_6) }}" title="Project" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ Storage::disk('s3')->url($image_path.$project_details->project_image_6) }}" class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="gallery-detail text-center"> <i class="fa fa-search-plus" aria-hidden="true"></i> </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection