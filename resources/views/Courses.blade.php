@extends('Layout.app')
@section('title', 'Courses')
@section('content')
<div class="container section-marginTop text-center">  
    <div class="container-fluid jumbotron mt-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  text-center">
                    <img class=" page-top-img fadeIn" src="images/knowledge.svg">
                    <h1 class="page-top-title mt-3">- অনলাইন কোর্স সমূহ -</h1>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4 p-1 text-center">
                <div class="card">
                    <div class="text-center">
                        <img class="w-100" src="images/react.jpg" alt="Card image cap">
                        <h5 class="service-card-title mt-4">{{$course->course_name}}</h5>
                        <h5 class="service-card-title mt-4">{{$course->course_des}}</h5>
                        <h5 class="service-card-title mt-4">{{$course->course_fee}} {{$course->course_totalclass}}</h5>
                        <button class="normal-btn-outline mt-2 mb-4 btn">শুরু করুন </button>
                    </div>
                </div>
            </div>
        @endforeach
</div>

@endsection