@extends('layouts.index')
@section('content')
<div class="container" style="margin-bottom: 10%;">
    <div class="row">
        <div class="col-lg-5 mx-auto mt-5 border border-3 p-4 border-primary">
            <div class="card">
                @if ($riwayat !== NULL && $riwayat[0]->id !== NULL)
                @foreach ($riwayat as $r)
                <div class="card-header">
                    <h3 class="card-title">Struk Pembayaran</h3>
                </div>
                <div class="card-body">
                    <h4 class="text-center">
                        ID Booking : {{ $r->id }}
                    </h4>
                    <div class="form-group">
                        <label for="">Nama Pelanggan</label>
                        <input type="text" class="form-control text-dark-all fw-bold bg-white" value="{{ $r->user->nama }}" disabled>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Tanggal Main</label>
                        <input type="date" class="form-control text-dark-all fw-bold bg-white" value="{{ $r->booking->tgl_booking }}" disabled>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Jam Main</label>
                        <input type="time" class="form-control text-dark-all fw-bold bg-white" value="{{ $r->booking->jam_booking }}" disabled>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Durasi Main</label>
                        <input type="text" class="form-control text-dark-all fw-bold bg-white" value="{{ $r->booking->durasi }}" disabled>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Lapangan Main</label>
                        <input type="text" class="form-control text-dark-all fw-bold bg-white" value="{{ $r->booking->lapangan->nama }}" disabled>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Metode Bayar</label>
                        <input type="text" class="form-control text-dark-all fw-bold bg-white" value="{{ $r->metode_pembayaran }}" disabled>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Harga Total</label>
                        @if (date('l', strtotime($r->booking->tgl_booking)) == "Sunday")
                            <input type="text" class="form-control text-dark-all fw-bold bg-white"value="Rp. {{ number_format($r->booking->lapangan->harga_weekend * $r->booking->durasi, '2', ',', '.') }}" disabled>
                            @else
                            <input type="text" class="form-control text-dark-all fw-bold bg-white"value="Rp. {{ number_format($r->booking->lapangan->harga_normal * $r->booking->durasi, '2', ',', '.') }}" disabled>
                            @endif
                    </div>
                    <div>
                            <form action="{{ url('invoice') }}" method="get">
                                @csrf
                                {{-- <input type="hidden" name="id" value="{{ encrypt(Auth::user()->id) }}"> --}}
                                <input type="hidden" name="id" value="{{ $r->id }}">
                                <button type="submit" class="btn btn-outline-success rounded-3 mt-2 w-100"><i
                                    class="fas fa-download"></i>&nbsp;Download</button>
                            </form>
                        {{-- <a href="{{ url('invoice') }}" class="btn btn-outline-success rounded-3 mt-2 w-100"><i
                                class="fas fa-download"></i>&nbsp;Download</a> --}}
                    </div>
                    <div>
                        <a href="#home" class="btn btn-outline-primary rounded-3 mt-3"><i
                                class="fas fa-angle-double-left"></i>&nbsp;Back</a>
                    </div>
                </div>
                @endforeach
                        @endif
            </div>
        </div>
    </div>
</div>
@endsection
