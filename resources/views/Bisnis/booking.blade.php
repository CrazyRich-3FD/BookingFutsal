@extends('layouts.index')
@section('content')
<div class="container mt-5" style="margin-bottom: 10%;">
    <div class="row">
        <div class="col-lg-5 mx-auto p-4" style="border: 3px dashed aqua; border-radius: 15px;">
            <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
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
                <div class="form-group mt-2">
                    <label for="">Pilih Tanggal</label>
                    <input type="text" class="form-control datepicker" name="tgl_booking" id="">
                </div>
                <div class="form-group mt-2">
                    <label for="">Pilih Jam</label>
                    <select name="jam_booking" id="" class="form-control" >
                        <option selected disabled>-- Pilih Jam --</option>
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                        <option value="21:00">21:00</option>
                        <option value="22:00">22:00</option>
                        <option value="23:00">23:00</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">Pilih Lapangan</label>
                    <select name="lapangan_id" id="" class="form-control">
                        <option selected disabled>-- Pilih Lapangan --</option>
                        @foreach ($lapangan as $l)
                            <option value="{{ $l->id }}">{{ $l->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="">Durasi</label>
                    <input name="durasi" id="" class="form-control" onkeypress="javascript:return isNumber(event)"
                        placeholder="Durasi Bermain">
                </div>
                <button type="submit" class="btn btn-primary mr-3" name="proses">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
