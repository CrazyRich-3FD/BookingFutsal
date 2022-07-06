@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card">
            <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4>Form Update User</h4>
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
                        <label>Nama User</label>
                        <input type="text" class="form-control" name="nama" value="{{ $user->nama }}" required="">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level">
                                    <option value="{{ $user->level }}">{{ $user->level }}</option>
                                    <option value="Bronze">Bronze</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Platinum">Platinum</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role">
                                    <option value="{{ $user->role }}">{{ $user->role }}</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Member">Member</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $user->username }}"
                            required="">
                    </div>
                    {{-- <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" name="password" value="{{ $user->password }}"
                                        class="form-control pwstrength" data-indicator="pwindicator">
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Password Confirm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" name="password-confirm" class="form-control pwstrength"
                                        data-indicator="pwindicator" value="{{ $user->password }}>
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ $user->email }}" name="email">
                    </div>
                    <div class="form-group">
                        <label>No.HP</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <input type="text" name="no_hp" value="{{ $user->no_hp }}"
                                class="form-control phone-number">
                        </div>
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
