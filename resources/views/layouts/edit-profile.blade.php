@extends('layouts.index')
@section('content')
<div class="container" style="margin-bottom: 10%;">
    <div class="row">
        <div class="col-lg-10 mx-auto mt-5">
            <div class="card border border-3 border-primary">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Edit Profile</h4>
                </div>
                <div class="p-3">
                    <form action="{{ route('update.profile',["id" => auth()->user()->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                        <div class="p-4 text-center">
                            <img class="rounded-circle border border-2 border-primary w-25" src="{{ asset ('template/img/pp.png')}}" alt="Foto Profil">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama user</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->nama }}"
                                placeholder="Tuliskan Nama user">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}"
                                placeholder="Tuliskan Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ auth()->user()->username }}"
                                placeholder="Tuliskan Username Anda">
                        </div>
                        <div class="form-group">
                            <label for="noHp">No Hp</label>
                            <input type="text" class="form-control" onfocus="isNumber(event)" id="noHp" name="no_hp" value="{{ auth()->user()->no_hp }}"
                                placeholder="Tuliskan No HP Anda">
                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="5"
                                placeholder="Pesan Review Anda terhadap Aplikasi Kami">{{ auth()->user()->alamat }}</textarea>
                        </div>
                        <input type="hidden" name="role" value="{{ auth()->user()->role }}">
                        <div class="card-footer text-right d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-primary px-3 mr-3" name="proses">Submit</button>
                            <a href="{{ route('profile',auth()->user()->id) }}" class="btn btn-success px-3">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
