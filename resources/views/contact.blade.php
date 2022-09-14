@extends('layouts.app')

@section('content')
<!-- Banner Title -->
@if($contact_contents->contact_banner_image)
    <div class="ready banner-padding bg-img" data-overlay-dark="0" data-background="{{ Storage::disk('s3')->url($image_path.$contact_contents->contact_banner_image) }}">
@else
    <div class="ready banner-padding bg-img" data-overlay-dark="0" data-background="{{ Storage::disk('s3')->url('uploads/placeholder.png') }}">
@endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center animate-box" data-animate-effect="fadeInUp">
                        <div class="title">
                            <h1>CONTACT US</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInLeft">
                    <span>Location</span>
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row mb-60">
                        <div class="col-md-2"> <span class="line-one"></span> </div>
                        <div class="col-md-4 mb-30">
                            {!! isset($contact_contents->contact_content) ? $contact_contents->contact_content : '' !!}
                            <p><b>Phone :</b> {{ isset($contact_contents->contact_phone) ? $contact_contents->contact_phone : '' }}</p>
                            <p><b>eMail :</b> {{ isset($contact_contents->contact_email) ? $contact_contents->contact_email : '' }}</p>
                            <p><b>Address :</b> {!! isset($contact_contents->contact_address) ? $contact_contents->contact_address : '' !!}.</p>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <h6>Drop me a line!</h6>
                            <form method="post" class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" placeholder="Full Name" />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" placeholder="Email" required />
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="message" cols="40" rows="4" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="arcprime-btn" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62529.61208639029!2d76.05079566844434!3d11.616166514017369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba6733459fb33d7%3A0xa5b953217a9fc043!2sKalpetta%2C%20Kerala!5e0!3m2!1sen!2sin!4v1609029883830!5m2!1sen!2sin"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
