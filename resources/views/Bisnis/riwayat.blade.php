@extends('layouts.index')
@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100 my-3 align-items-center">
                    <h3>Data Transaksi</h3>
                    {{-- <div class="g-3">
                        <a href="{{ url('transaksiPDF') }}" type="button" class="btn btn-warning">Unduh PDF</a>
                        <a href="{{ url('transaksiExcel') }}" type="button" class="btn btn-success">Unduh Excel</a>
                    </div> --}}

                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <thead>
                            <tr class="text-center">
                                <th class="ml-5">No</th>
                                <th>Nama Pelanggan</th>
                                <th>Booking Lapangan</th>
                                <th>Tanggal Booking</th>
                                <th>Jam Booking</th>
                                <th></th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $t)
                            @if ($t->user->id == Auth::user()->id)
                            <tr class="text-center">
                                <td>{{ ++$i }}</td>
                                <td>{{ $t->user->nama }}</td>
                                <td>{{ $t->booking->lapangan->nama }}</td>
                                <td>{{ $t->booking->tgl_booking }}</td>
                                <td>{{ $t->booking->jam_booking }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <form action="{{ url('detail') }}" method="get">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ encrypt($t->id) }}">
                                            <button type="submit" class="btn btn-success">Show</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            {{-- <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <div class="pagination">
                        <div class="fs-3 fw-bolder">
                            {{ $riwayat->links() }}
        </div>
    </div>
    </nav>
</div> --}}
</div>
<div class="d-flex justify-content-center my-5"></div>
{{-- <div class="d-flex justify-content-center my-5">{{ $transaksi->links() }}</div> --}}

</div>
</div>
@endsection
