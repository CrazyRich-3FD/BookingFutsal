@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100 my-3 align-items-center">
                    <h3>Data Lapangan</h3>
                    <a href="{{ route('lapangan.create') }}" type="button" class="btn btn-primary">Tambah</a>
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
                                <th>Jenis Lapangan</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lapangan as $l)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $l->nama }}</td>
                                <td>{{ $l->jenis_lapangan }}</td>
                                <td>{{ $l->deskripsi }}</td>
                                <td>
                                    <form action="{{ route('lapangan.destroy',$l->id) }}" method="POST"
                                        class="d-flex align-items-center">
                                        <a class="btn btn-primary btn-sm mr-3"
                                            href="{{ route('lapangan.show',$l->id) }}">Show</a>
                                        <a href="{{ route('lapangan.edit',$l->id) }}"
                                            class="btn btn-success btn-sm mr-3">
                                            Edit</a>
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
                    <div class="pagination">
                        <div class="fs-3 fw-bolder">
                            {{ $lapangan->links() }}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</div>
</section>
</div>

@endsection
