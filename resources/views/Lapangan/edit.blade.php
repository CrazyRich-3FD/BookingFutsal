@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('lapangan.update',$lapangan->id) }}" enctype="multipart/form-data" method="POST"
                class="forms-sample">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4>Form Update Lapangan</h4>
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
                        <div class="col-12 col-md-8">
                            <div class="form-group">
                                <label>Nama Lapangan</label>
                                <input type="text" class="form-control" name="nama" value="{{ $lapangan->nama }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status">
                                    <option value="{{ $lapangan->status }}">{{ $lapangan->status }}</option>
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Sudah Dipesan">Sudah Dipesan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jenis Lapangan</label>
                        <input type="text" class="form-control" name="jenis_lapangan"
                            value="{{ $lapangan->jenis_lapangan }}">
                    </div>
                    <div class="form-group">
                        <label>Harga Normal</label>
                        <input type="text" class="form-control" name="harga_normal"
                            onkeypress="javascript:return isNumber(event)" value="{{ $lapangan->harga_normal }}">
                    </div>
                    <div class="form-group">
                        <label>Harga Weekend</label>
                        <input type="text" class="form-control" name="harga_weekend"
                            onkeypress="javascript:return isNumber(event)" value="{{ $lapangan->harga_weekend }}">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="hidden" name="oldImage" value="{{ $lapangan->gambar }}">
                        @if($lapangan->gambar)
                        <img src="{{ asset('storage/'.$lapangan->gambar) }}"
                            class="img-fluid img-preview mb-3 col-sm-4 d-block">
                        @else
                        <img class="img-fluid img-preview mb-3 col-sm-4">
                        @endif

                        <input type="file" class="form-control" name="gambar" id="gambar"
                            value="{{ $lapangan->gambar }}" onchange="previewImage()">
                    </div>
                    <div class="form-group mb-0">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" cols="30"
                            rows="10">{{ $lapangan->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="card-footer text-right d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3" name="proses">Submit</button>
                    <a href="{{ url('lapangan') }}" class="btn btn-success">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
