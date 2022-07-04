@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4>Show Booking</h4>
                <div class="card-header-action">
                    <a href="{{ url('booking') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <div class="mb-2 text-muted">Click the picture below to see the magic!</div>
                        <div class="chocolat-parent">
                            <a href="{{ asset('storage/'.$booking->lapangan->gambar) }}" class="chocolat-image">
                                <div data-crop-image="300">
                                    <img alt="image" class="w-75" src="{{ asset('storage/'.$booking->lapangan->gambar) }}">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                   
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row" >Nama Lapangan</th>
                                            <td style="width: 0">:</td>
                                            <td>{{ $booking->lapangan->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" >Jenis Lapangan</th>
                                            <td style="width: 0">:</td>
                                            <td>{{ $booking->lapangan->jenis_lapangan }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" >Harga Normal</th>
                                            <td style="width: 0">:</td>
                                            <td>Rp. {{  Str::currency($booking->lapangan->harga_normal) }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" >Harga Weekend</th>
                                            <td style="width: 0">:</td>
                                            <td>Rp. {{  Str::currency($booking->lapangan->harga_weekend) }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tgl Booking</th>
                                            <td>:</td>
                                            <td> {{ $booking->tgl_booking }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jam Booking</th>
                                            <td>:</td>
                                            <td>{{ date('h:i A', strtotime($booking->jam_booking))}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Durasi</th>
                                            <td>:</td>
                                            <td>{{ $booking->durasi }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <td>:</td>
                                            <td>{{ $booking->status }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                         
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
