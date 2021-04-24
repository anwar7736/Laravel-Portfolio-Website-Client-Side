@extends('Layout.app')
@section('title', 'Contact us')
@section('content')
<div class="container-fluid jumbotron mt-5 ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6  text-center">
                <h1><i class="fas fa-envelope"></i></h1>
                <h1 class="page-top-title mt-3">- যোগাযোগ করুন -</h1>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark section-marginTop parallax text-center">
    <div class="row ">
        <div class="col-md-6 contact-form ">
            <h5 class="help-line-title"> <i class="fas icon-custom-color fa-headphones-alt"></i> হেলপ লাইন </h5>
            <h5 class="help-line-title m-0">  ০১৬৮৮-১৮২০২৮ </h5>
            <h5 class="help-line-title m-0">  ০১৭৯৪-০৩০৫৯২ </h5>
            <h5 class="help-line-title m-0">  ০১৭৯৫-৭০০৮৩৮ </h5>
            <h5 class="help-line-title m-0">  ০১৮৩৮-৬৯৩৫০৮ </h5>
            <h5 class="help-line-title m-0">  ০১৯৯৮-৮৩৯৮৬০ </h5>
        </div>
        <div class="col-md-4 contact-form">
                <h5 class="service-card-title">যোগাযোগ করুন </h5>
                <div class="form-group ">
                    <input id="name" type="text" class="form-control w-100" placeholder="আপনার নাম">
                </div>
                <div class="form-group">
                    <input id="contact" type="text" class="form-control  w-100" placeholder="মোবাইল নং">
                </div>
                <div class="form-group">
                    <input id="email" type="text" class="form-control  w-100" placeholder="ইমেইল">
                </div>
                <div class="form-group">
                    <input id="message" type="text" class="form-control  w-100" placeholder="মেসেজ">
                </div>
                <button id="MsgSendBtn" type="submit" class="btn btn-block normal-btn w-100">পাঠিয়ে দিন </button>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>

@endsection