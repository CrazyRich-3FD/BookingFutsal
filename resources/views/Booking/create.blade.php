@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                <div class="card-header">
                    <h4>Form Input Booking</h4>
                </div>
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
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Lapangan</label>
                        <select class="form-control select2" name="lapangan_id">
                            <option>--- Pilih Lapangan ---</option>
                            @foreach ($lapangan as $l)
                            <option value="{{ $l->id }}">{{ $l->nama }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Tgl Booking</label>
                                <input type="text" class="form-control datepicker" name="tgl_booking">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Time Booking</label>
                                <div class="input-group">
                                    <input type="time" class="form-control" name="jam_booking">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Durasi</label>
                                <input type="text" class="form-control" name="durasi">
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" name="status">
                            <option>--- Pilih Status ---</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Sudah Dipesan">Sudah Dipesan</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-right d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3" name="proses">Submit</button>
                    <a href="{{ url('booking') }}" class="btn btn-success">Cancel</a>
                </div>
            </form>
        </div>
</div>
</section>
</div>
@endsection
