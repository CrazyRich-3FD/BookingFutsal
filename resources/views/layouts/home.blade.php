@extends('layouts.index')
@section('content')
    <!-- Carousel Start -->
    @include ('layouts.slider')
    <!-- Carousel End -->

    <!-- Banner Start -->
    @include ('layouts.info')
    <!-- Banner Start -->

    <!-- About Start -->
    @include ('layouts.about')
    <!-- About End -->

    <!-- Service Start -->
    @include ('layouts.galeri')
    <!-- Service End -->

    <!-- Pricing Start -->
    {{-- @include ('layouts.harga') --}}
    <!-- Pricing End -->

    <!-- Testimonial Start -->
    @include ('layouts.testimoni')
    <!-- Testimonial End -->
    
@endsection