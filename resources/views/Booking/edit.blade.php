@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('booking.update',$booking->id) }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4>Form Update Booking</h4>
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
                        <label>Lapangan</label>
                        <select class="form-control select2" name="lapangan_id">
                            <option value="{{ $booking->lapangan_id }}">{{ $booking->lapangan->nama }}</option>
                            @foreach ($lapangan as $l)
                            <option value="{{ $l->id }}">{{ $l->nama }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Tgl Booking</label>
                                <input type="text" class="form-control datepicker" name="tgl_booking" value="{{ $booking->tgl_booking }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Time Booking</label>
                                <div class="input-group">
                                    <input type="time" class="form-control" name="jam_booking" value="{{ $booking->jam_booking}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Durasi</label>
                                <input type="text" class="form-control" name="durasi" value="{{ $booking->durasi }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3" name="proses">Submit</button>
                    <a href="{{ url('admins/booking') }}" class="btn btn-success">Cancel</a>
                </div>
            </form>
        </div>
</div>
</section>
</div>
@endsection
