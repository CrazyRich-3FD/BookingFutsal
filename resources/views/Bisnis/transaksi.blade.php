@extends('layouts.index')
@section('content')
<div class="container" style="margin-bottom: 10%;">
    <div class="row">
        <div class="col-lg-5 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Booking Lapangan</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="">Nama Pelanggan</label>
                            <select class="form-control select2" name="user_id">
                                @if ($single_user !== NULL && $single_user[0]->id !== NULL)
                                @foreach ($single_user as $su)

                                <option value="{{ $su->id }}" selected>{{ $su->nama }}</option>

                                @endforeach
                                @else
                                @foreach ($user as $u)
                                {{-- <select class="form-control select2" name="user_id"> --}}
                                <option>--- Pilih User ---</option>
                                <option value="{{ $u->id}}">{{ $u->nama }}</option>
                                {{-- </select> --}}
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Booking</label>
                            <select class="form-control select2" name="booking_id">
                                @if ($id_booking !== NULL && $id_booking[0]->id !== NULL)
                                @foreach ($id_booking as $bk)

                                <option value="{{ $bk->id }}" selected>{{ $bk->lapangan->nama }}</option>

                                @endforeach
                                @else
                                @foreach ($booking as $b)
                                <option>--- Pilih User ---</option>
                                <option value="{{ $b->id}}">{{ $b->lapangan->nama }}</option>

                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Metode Bayar</label>
                            <select name="metode_pembayaran" id="" class="form-control">
                                <option value="" selected disabled>-- Pilih Metode Bayar --</option>
                                <option value="1">Lunas</option>
                                <option value="2">DP</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Bukti Pembayaran</label>
                            <img class="img-fluid img-preview mb-3 col-sm-4">
                            <input type="file" class="form-control" name="bukti_byr" id="gambar"
                                onchange="previewImage()">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
