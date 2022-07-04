@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                <div class="card-header">
                    <h4>Form Input Transaksi</h4>
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
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <select class="form-control select2" name="pelanggan_id">
                                    <option>--- Pilih Pelanggan ---</option>
                                    @foreach ($pelanggan as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Booking Lapangan</label>
                                <select class="form-control select2" name="booking_id">
                                    <option>--- Pilih Lapangan ---</option>
                                    @foreach ($booking as $b)
                                    <option value="{{ $b->id }}">{{ $b->lapangan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Metode Pembayaran</label>
                                <select class="form-control" name="metode_pembayaran">
                                    <option>--- Pilih Pembayaran ---</option>
                                    <option value="DP">DP</option>
                                    <option value="Lunas">Lunas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bukti Pembayaran</label>
                        <img class="img-fluid img-preview mb-3 col-sm-4">
                        <input type="file" class="form-control" name="bukti_byr" id="gambar" onchange="previewImage()">
                    </div>
                </div>

                <div class="card-footer text-right d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3" name="proses">Submit</button>
                    <a href="{{ url('transaksi') }}" class="btn btn-success">Cancel</a>
                </div>
            </form>
        </div>
</div>
</section>
</div>
@endsection
