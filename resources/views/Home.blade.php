@extends('Layout.app')
@section('title', 'Home')
@section('content')
	@include('Components.HomeBanner')
	@include('Components.HomeService')
	@include('Components.HomeCourse')
	@include('Components.HomeProject')
	@include('Components.HomeContact')
	@include('Components.HomeReview')
@endsection
@section('script')
	
@endsection