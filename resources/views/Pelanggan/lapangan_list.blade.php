@extends('layouts.index')
@section('content')
    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" style="margin-bottom: 10rem" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">List Lapangan</h5>
            </div>
                <div class="row g-3">
                    @foreach ($lapangan as $l)
                    <div class="col-4 price-item pb-4">
                        <div class="position-relative w-100 bg-success" style="height: 40%">
                            <img class="img-fluid w-100 h-100 rounded-top" src="{{ asset('img/lapangan/'.$l->gambar) }}" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h5 class="text-primary m-0">{{ $l->nama }}</h5>
                            </div>
                        </div>
                        <div class="position-relative bg-light border-bottom border-primary py-5 p-4">
                            <h4 class="text-center">Deskripsi</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Type</td>
                                        <td>:</td>
                                        <td>{{ $l->jenis_lapangan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga Normal</td>
                                        <td>:</td>
                                        <td>{{ $l->harga_normal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga Weekend</td>
                                        <td>:</td>
                                        <td>{{ $l->harga_weekend }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div> --}}
                            <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Booking</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
    <!-- Pricing End -->
@endsection