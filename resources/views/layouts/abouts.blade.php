@extends('layouts.index')
@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container mb-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                    <h1 class="display-5 mb-0">The Best Booking Futsal Platform in Indonesia</h1>
                </div>
                <h4 class="text-body fst-italic mb-4">Tempat booking lapangan futsal terbaik se-Indonesia. Mudah dan Terpercaya!!</h4>
                <p class="mb-4">Bagi kalian para pecinta futsal, tetapi bingung dan malas ingin booking langsung di tempat? Platform kami solusinya. Platform Booking termudah dan terpercaya yang menyediakan lapangan dari tempat futsal kesayangan anda.</p>
                <div class="row g-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Mudah dan Efisien</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Harga Terjangkau</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fast Respon</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Terpercaya</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset ('template/img/about.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection