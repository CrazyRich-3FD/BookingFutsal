@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('pelanggan.update',$pelanggan->id) }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4>Form Input Pelanggan</h4>
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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" class="form-control" name="nama" value="{{ $pelanggan->nama }} "required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>User</label>
                                <select class="form-control select2" name="user_id">
                                    <option value="{{ $pelanggan->user_id }}">{{ $pelanggan->user->nama }}</option>
                                    @foreach ($user as $u)
                                    <option value="{{ $u->id }}">{{ $u->nama }}</option>
                                    @endforeach
        
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" class="form-control" name="no_tlp" value="{{ $pelanggan->no_tlp }}" required="">
                    </div>
                    <div class="form-group mb-0">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" required="" cols="30" rows="10">{{ $pelanggan->alamat }}</textarea>
                    </div>
                </div>
                <div class="card-footer text-right d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3" name="proses">Submit</button>
                    <a href="{{ url('pelanggan') }}" class="btn btn-success">Cancel</a>
                </div>
            </form>
        </div>
</div>
</section>
</div>
@endsection
