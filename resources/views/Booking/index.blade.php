@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100 my-3 align-items-center">
                    <h3>Data Booking</h3>
                    <a href="{{ route('booking.create') }}" type="button" class="btn btn-primary">Tambah</a>
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
                                <th>Nama Lapangan</th>
                                <th>Tgl Booking</th>
                                <th>Jam Booking</th>
                                <th>Durasi Booking</th>
                                <th>Status Booking</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as $b)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $b->lapangan->nama }}</td>
                                <td>{{ $b->tgl_booking }}</td>
                                <td>{{ date('h:i A', strtotime($b->jam_booking))}}</td>
                                <td>{{ $b->durasi }} Jam</td>
                                <td>{{ $b->status }}</td>
                                <td>
                                    <form action="{{ route('booking.destroy',$b->id) }}" method="POST"
                                        class="d-flex align-items-center">
                                        <a class="btn btn-primary btn-sm mr-3"
                                            href="{{ route('booking.show',$b->id) }}">Show</a>
                                        <a href="{{ route('booking.edit',$b->id) }}"
                                            class="btn btn-success btn-sm mr-3">Edit</a>
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm show_confirm" data-toggle="tooltip" name="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    {{-- <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul> --}}
                    <div class="pagination">
                        <div class="fs-3 fw-bolder">
                            {{ $booking->links() }}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</div>
</section>
</div>

@endsection
