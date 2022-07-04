@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
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
                                <input type="text" class="form-control" name="nama" required="">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>User</label>
                                <select class="form-control select2" name="user_id">
                                    <option>--- Pilih User ---</option>
                                    @foreach ($user as $u)
                                <option value="{{ $u->id}}">{{ $u->nama }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" class="form-control" name="no_tlp" required="">
                    </div>
                    <div class="form-group mb-0">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" required="" cols="30" rows="10"></textarea>
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
