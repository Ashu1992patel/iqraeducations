@extends('frontendview.index')
@section('title', 'Welcome')
@section('content')
    <!-- Slider Area Start -->
    @include('frontendview.common.slider-area')
    <!-- Slider Area End -->
    
    <!-- Services Start -->
    @include('frontendview.common.services')
    <!-- Services End -->

    <!-- About Us Start -->
    @include('frontendview.common.about-us')
    <!-- About Us End -->
    
    <!-- Counter Up Section Start-->
    @include('frontendview.common.counter')
    <!-- Counter Down Section End -->

    <!-- Courses Start -->
    @include('frontendview.common.courses')
    <!-- Courses End -->
    
    <!-- Team Start -->
    @include('frontendview.common.team')
    <!-- Team End -->

    <!-- Events Start -->
    @include('frontendview.common.events')
    <!-- Events End -->
    
    <!-- Testimonial Start -->
    @include('frontendview.common.testimonial')
    <!-- Testimonial End -->

    <!-- Latest News Start -->
    @include('frontendview.common.latest-news')
    <!-- Latest News End -->
    
    <!-- RS Gallery section start -->
    @include('frontendview.common.gallery')
    <!-- RS Gallery section end -->
    
    <!-- Partner Start -->
    @include('frontendview.common.partners')
    <!-- Partner End -->
@endsection