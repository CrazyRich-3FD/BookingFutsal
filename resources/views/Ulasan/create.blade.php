@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('ulasan.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="card-header">
                    <h4>Form Input User</h4>
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
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group mb-0">
                        <label>Ulasan</label>
                        <textarea class="form-control" name="ulasan" cols="30" rows="10"></textarea>
                    </div>

                </div>
                <div class="card-footer text-right d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3" name="proses">Submit</button>
                    <a href="{{ url('user') }}" class="btn btn-success">Cancel</a>
                </div>
            </form>
        </div>
</div>
</section>
</div>
@endsection
