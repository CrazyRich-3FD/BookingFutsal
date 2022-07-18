@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4>Show User</h4>
                <div class="card-header-action">
                    <a href="{{ url('admins/user') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="author-box-left">
                    <img alt="image" src="{{ asset('admin/img/avatar/avatar-1.png') }}"
                        class="rounded-circle author-box-picture">
                </div>
                <div class="author-box-details">
                    <div class="author-box-name">
                        <label class="text-primary">{{ $user->nama }}</label>
                    </div>
                    <div class="author-box-job">{{ $user->role }}</div>
                    <div class="author-box-description">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 5rem">Email</th>
                                    <td style="width: 0">:</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td>:</td>
                                    <td>{{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Password</th>
                                    <td>:</td>
                                    <td>{{ $user->password }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No. HP</th>
                                    <td>:</td>
                                    <td>{{ $user->no_hp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>:</td>
                                    <td>{{ $user->alamat }}</td>
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
