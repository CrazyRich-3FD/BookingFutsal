@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between w-100 my-3 align-items-center">
                    <h3>Data Ulasan</h3>
                    <a href="{{ route('ulasan.create') }}" type="button" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="card-body p-1">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <thead>
                            <tr class="text-center">
                                <th class="ml-5">No</th>
                                <th>Nama</th>
                                <th>Ulasan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ulasans as $u)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $u->nama }}</td>
                                <td>{{ $u->ulasan }}</td>
                                
                                <td>
                                    <form action="{{ route('ulasan.destroy',$u->id) }}" method="POST"
                                        class="d-flex align-items-center">
                                        {{-- <a class="btn btn-primary btn-sm btn-icon-text mr-3"
                                            href="{{ route('ulasan.show',$u->id) }}">Show</a> --}}
                                        <a href="{{ route('ulasan.edit',$u->id) }}"
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
                    <div class="pagination">
                        <div class="fs-3 fw-bolder">
                            {{ $ulasans->links() }}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</div>
</section>
</div>

@endsection
