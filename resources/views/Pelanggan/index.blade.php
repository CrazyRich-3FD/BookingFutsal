@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100 my-3 align-items-center">
                    <h3>Data Pelanggan</h3>
                    <a href="{{ route('pelanggan.create') }}" type="button" class="btn btn-primary">Tambah</a>
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
                                <th>User</th>
                                <th>Nama Pelanggan</th>
                                <th>No. Hp</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelanggan as $p)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $p->user->nama }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->no_tlp }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <form action="{{ route('pelanggan.destroy',$p->id) }}" method="POST"
                                        class="d-flex align-items-center">
                                        <a class="btn btn-primary btn-sm btn-icon-text mr-3"
                                            href="{{ route('pelanggan.show',$p->id) }}">Show</a>
                                        <a href="{{ route('pelanggan.edit',$p->id) }}"
                                            class="btn btn-success btn-sm btn-icon-text mr-3">Edit</a>
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
                    <ul class="pagination mb-0">
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
                    </ul>
                </nav>
            </div>
        </div>
</div>
</section>
</div>

@endsection
