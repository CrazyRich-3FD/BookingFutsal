@extends('layouts.index')
@section('content')
@php
$id = $_REQUEST['id'];
$date = Date("d F Y");
@endphp
@if ($id_booking !== NULL && $id_booking[0]->id !== NULL)
@foreach ($id_booking as $bk)
<div class="container" style="margin-bottom: 10%;" data-wow-delay="0.1s">
    <div class="row">
        <div class="col-lg-9 mx-auto mt-5">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="card-title text-white text-center">MOHON SEGERA SELESAIKAN PEMBAYARAN</h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <p style="font-size: 20px;">
                            Transfer Dana anda sebelum <b>{{ $date }} 23:59 WIB</b>
                        </p>
                        <hr style="border: 1px solid;">
                    </div>
                    <div class="card border border-0">
                        <div class="card-body" style="border: 1px solid darkgrey;">
                            <p class="fw-bolder text-center" style="font-size: 15px;"><b>JUMLAH YANG HARUS DIBAYAR</b>
                            </p>
                            @if (date('l', strtotime($bk->tgl_booking)) == "Sunday")
                            <p class="display-6 text-primary text-center">Rp.
                                {{ number_format($bk->lapangan->harga_weekend * $bk->durasi, '2', ',', '.') }}</p>
                            @else
                            <p class="display-6 text-primary text-center">Rp.
                                {{ number_format($bk->lapangan->harga_normal*$bk->durasi, '2', ',', '.') }}</p>
                            @endif

                        </div>
                        <div class="card-header text-muted w-100" style="border: 1px solid darkgrey; line-height: 5px;">
                            <p class="text-center mt-2" style="font-size: 15px;"><b>Harap transfer sesuai jumlah
                                    pembayaran, hingga digit terakhir.</b></p>
                            <p class="text-center" style="font-size: 10px;">Jika jumlah yang ditransfer tidak sesuai,
                                proses verifikasi pembayaran anda dapat terhambat.</p>
                        </div>
                        <div class="d-flex justify-content-center mt-4 mb-4">
                            <div class="d-flex flex-column border border-2 m-2 p-3" style="line-height: 15px;">
                                <img class="mx-auto mt-3"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/1200px-Bank_Mandiri_logo_2016.svg.png"
                                    alt="Logo Bank Mandiri" width="200">
                                <p class="text-center mt-4" style="font-size: 20px;"><b>1-320-032-112-121</b></p>
                                <p>Atas nama PT. KIRIM EMAIL INDONESIA</p>
                            </div>
                            <div class="d-flex flex-column border border-2 m-2 p-3" style="line-height: 15px;">
                                <img class="mx-auto mt-3"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png"
                                    alt="Logo Bank BCA" width="200">
                                <p class="text-center mt-4" style="font-size: 20px;"><b>2-784-212-121</b></p>
                                <p>Atas nama PT. KIRIM EMAIL INDONESIA</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <hr style="border: 1px solid;">
                        @if (Auth::check())
                        <form action="{{ route('pembayaran.create') }}" method="get"
                            class="d-flex justify-content-center">
                            @csrf
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="idbooking" value="{{ $id }}">
                            <button type="submit" class="btn btn-success w-50 mx-auto"><i
                                    class="bi bi-cloud-arrow-up-fill"></i>&nbsp;Konfirmasi Pembayaran</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container-fluid py-5 wow fadeInUp" style="margin-bottom: 10rem" data-wow-delay="0.1s">
    <div class="container">
        @if (Auth::check())
        <form action="{{ route('pembayaran.create') }}" method="get">
@csrf
<input type="hidden" name="id" value="{{ Auth::user()->id }}">
<input type="hidden" name="idbooking" value="{{ $id }}">
<button type="submit"
    class="btn btn-primary py-2 px-4 position-relative top-100 start-50 translate-middle">Booking</button>

</form>
@endif
</div>
</div> --}}

@endsection
