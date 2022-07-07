@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('lapangan.store') }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                <div class="card-header">
                    <h4>Form Input Lapangan</h4>
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
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Lapangan</label>
                        <input type="text" class="form-control" name="jenis_lapangan">
                    </div>
                    <div class="form-group">
                        <label>Harga Normal</label>
                        <input type="number" class="form-control" name="harga_normal">
                    </div>
                    <div class="form-group">
                        <label>Harga Weekend</label>
                        <input type="number" class="form-control" name="harga_weekend">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <img class="img-fluid img-preview mb-3 col-sm-4">
                        <input type="file" class="form-control" name="gambar" id="gambar" onchange="previewImage()">
                    </div>
                    <div class="form-group mb-0">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="card-footer text-right d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3" name="proses">Submit</button>
                    <a href="{{ url('lapangan') }}" class="btn btn-success">Cancel</a>
                </div>
            </form>
        </div>
</div>
</section>
</div>
@endsection
