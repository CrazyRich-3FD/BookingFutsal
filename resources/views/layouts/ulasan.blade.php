@extends('layouts.index')
@section('content')
<div class="container" style="margin-bottom: 10%;">
    <div class="row">
        <div class="col-lg-10 mx-auto mt-5">
            <div class="card border border-3 border-primary">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Beri Ulasan</h4>
                </div>
                <div class="p-3">
                    <form action="{{ route('storeBeriUlasan') }}" method="post" enctype="multipart/form-data">
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
                            <label for="nama">Nama Anda</label>
                            <input class="form-control" id="nama" name="nama"
                                placeholder="Tuliskan Nama atau Username Anda">
                        </div>
                        <div class="form-group mt-3">
                            <label for="ulasan">Ulasan</label>
                            <textarea class="form-control" id="ulasan" name="ulasan" rows="5"
                                placeholder="Pesan Review Anda terhadap Aplikasi Kami"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
