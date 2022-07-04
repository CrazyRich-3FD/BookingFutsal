@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('transaksi.update',$transaksi->id) }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4>Form Update Transaksi</h4>
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
                                    <option value="{{ $transaksi->pelanggan_id }}">{{ $transaksi->pelanggan->nama }}</option>
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
                                    <option value="{{ $transaksi->booking_id }}">{{ $transaksi->booking->lapangan->nama }}</option>
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
                                    <option value="{{ $transaksi->metode_pembayaran}}">{{ $transaksi->metode_pembayaran }}</option>
                                    <option value="DP">DP</option>
                                    <option value="Lunas">Lunas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bukti Pembayaran</label>
                        <input type="hidden" name="oldImage" value="{{ $transaksi->bukti_byr }}">
                        @if($transaksi->bukti_byr )
                            <img src="{{ asset('storage/'.$transaksi->bukti_byr ) }}" class="img-fluid img-preview mb-3 col-sm-4 d-block"> 
                        @else
                           <img class="img-fluid img-preview mb-3 col-sm-4"> 
                        @endif
                        
                        <input type="file" class="form-control" name="bukti_byr" id="gambar" value="{{ $transaksi->bukti_byr  }}" onchange="previewImage()">
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
