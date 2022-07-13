@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4>Show Booking</h4>
                <div class="card-header-action">
                    <a href="{{ url('admins/transaksi') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card-body">
                        <div class="mb-2 text-muted">Click the picture below to see the magic!</div>
                        <div class="chocolat-parent">
                            <a href="{{ asset('storage/'.$transaksi->bukti_byr) }}" class="chocolat-image">
                                <div data-crop-image="300">
                                    <img alt="image" class="w-75" src="{{ asset('storage/'.$transaksi->bukti_byr) }}">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">

                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Nama Pelanggan</th>
                                <td style="width: 0">:</td>
                                <td>{{ $transaksi->user->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Lapangan</th>
                                <td style="width: 0">:</td>
                                <td>{{ $transaksi->booking->lapangan->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Lapangan</th>
                                <td style="width: 0">:</td>
                                <td>{{ $transaksi->booking->lapangan->jenis_lapangan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>:</td>
                                <td>{{ $transaksi->booking->lapangan->status }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Harga Normal</th>
                                <td style="width: 0">:</td>
                                <td>Rp. {{  Str::currency($transaksi->booking->lapangan->harga_normal) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Harga Weekend</th>
                                <td style="width: 0">:</td>
                                <td>Rp. {{  Str::currency($transaksi->booking->lapangan->harga_weekend) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tgl Booking</th>
                                <td>:</td>
                                <td> {{ $transaksi->booking->tgl_booking }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jam Booking</th>
                                <td>:</td>
                                <td>{{ date('h:i A', strtotime($transaksi->booking->jam_booking))}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Durasi</th>
                                <td>:</td>
                                <td>{{ $transaksi->booking->durasi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Pembayaran</th>
                                <td>:</td>
                                <td>{{ $transaksi->metode_pembayaran }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection
