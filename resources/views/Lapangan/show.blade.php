@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Show Lapangan</h4>
                <div class="card-header-action">
                    <a href="{{ url('lapangan') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="card-body">
                        <div class="mb-2 text-muted">Click the picture below to see the magic!</div>
                        <div class="chocolat-parent">
                            <a href="{{ asset('storage/'.$lapangan->gambar) }}" class="chocolat-image">
                                <div data-crop-image="300">
                                    <img alt="image" class="w-75" src="{{ asset('storage/'.$lapangan->gambar) }}">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                              <tr>
                                <th scope="row">Nama Lapangan</th>
                                <td>:</td>
                                <td>{{ $lapangan->nama }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Jenis Lapangan</th>
                                <td>:</td>
                                <td>{{ $lapangan->jenis_lapangan }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Harga Normal</th>
                                <td >:</td>
                                <td>Rp. {{  Str::currency($lapangan->harga_normal) }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Harga Weekend</th>
                                <td >:</td>
                                <td>Rp. {{  Str::currency($lapangan->harga_weekend) }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Deskripsi</th>
                                <td >:</td>
                                <td>{{ $lapangan->deskripsi }}</td>
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
