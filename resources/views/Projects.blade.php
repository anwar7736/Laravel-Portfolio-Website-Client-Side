@extends('Layout.app')
@section('title', 'Projects')
@section('content')
<div class="container section-marginTop text-center">   
        <div class="container-fluid jumbotron mt-5 ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6  text-center">
                    <img class=" page-top-img fadeIn" src="images/code.svg">
                    <h1 class="page-top-title mt-3">- প্রজেক্টস সমূহ -</h1>
                </div>
            </div>
        </div>
        <div class="row">
           @foreach($projects as $project)
            <div id="one"  class="owl-carousel mb-4 owl-theme">
                <div class="item m-1 card">
                    <div class="text-center">
                        <img class="w-100" src="{{$project->project_img}}" alt="Card image cap">
                        <h5 class="service-card-title mt-4">{{$project->project_name}}</h5>
                        <h6 class="service-card-subTitle p-0 m-0">{{$project->project_des}}</h6>
                        <button class="normal-btn-outline mt-2 mb-4 btn">বিস্তারিত</button>
                    </div>
                </div>
               
            </div>
           @endforeach

        </div>
        <div class="d-inline ml-2">
            <i id="customPrevBtn" class="btn normal-btn"><</i>
            <i id="customNextBtn" class="btn normal-btn">></i>
            <button class="normal-btn  btn">সব গুলো </button>
        </div>
    </div>
@endsection