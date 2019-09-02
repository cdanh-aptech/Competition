@extends('layout.index')

@section('dangky')
<div id="qbootstrap-register" style="background-image: url(images/img_bg_5.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="date-counter text-center">
                    <h2>We offer <strong class="color">Free Consultation</strong></h2>
                    <h3>By Dr. <strong>Mary Smith</strong></h3>
                    <p class="countdown">
                        <span id="days"></span>
                        <span id="hours"></span>
                        <span id="minutes"></span>
                        <span id="seconds"></span>
                    </p>
                    <p><strong>Limited offer, Hurry Up!</strong></p>
                    <p><a href="#" class="btn btn-primary btn-lg">Book an Appointment <i class="icon-calendar3"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection