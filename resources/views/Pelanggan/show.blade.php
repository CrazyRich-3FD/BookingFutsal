@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4>Show Pelanggan</h4>
                <div class="card-header-action">
                    <a href="{{ url('pelanggan') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">User</th>
                                    <td>:</td>
                                    <td> {{ $pelanggan->user->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Role</th>
                                    <td>:</td>
                                    <td> {{ $pelanggan->user->role }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Level</th>
                                    <td>:</td>
                                    <td> {{ $pelanggan->user->level }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md 6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 10rem">Nama Pelanggan</th>
                                    <td style="width: 0">:</td>
                                    <td>{{ $pelanggan->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No. HP</th>
                                    <td>:</td>
                                    <td>{{ $pelanggan->no_tlp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>:</td>
                                    <td>{{ $pelanggan->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
