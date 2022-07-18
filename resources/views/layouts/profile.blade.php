@extends('layouts.index')
@section('content')
<div class="container" style="margin-bottom: 10%;">
    <div class="row">
        <div class="col-lg-10 mx-auto mt-5">
            <div class="card border border-3 border-primary">
                <div class="card-header bg-primary d-flex justify-content-between">
                    <h4 class="text-white">Profil User</h4>
                    <a href="{{ route('edit.profile', auth()->user()->id) }}" class="btn btn-outline-light">Changes Profile</a>
                </div>
                <div class="p-5">
                    <div class="user-profile">
                        <div class="p-4 text-center">
                            <img class="rounded-circle border border-2 border-primary w-25" src="{{ asset ('template/img/pp.png')}}" alt="Foto Profil">
                        </div>
                        <div class="user-profile-details">
                            <h2 class="text-center">{{ $user->nama }}</h2>
                            <table class="table table-borderless mt-4">
                                <tbody>
                                    <tr>
                                        <th scope="row" style="width: 10rem"><i class="fas fa-envelope">&emsp;<span>Email</span></th>
                                        <td style="width: 0">:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fas fa-user"></i>&emsp;<span>Username</span></th>
                                        <td>:</td>
                                        <td>{{ $user->username }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fas fa-phone">&emsp;<span>No. HP</span></th>
                                        <td>:</td>
                                        <td>{{ $user->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fas fa-map-marker-alt">&emsp;<span>Alamat</span></th>
                                        <td>:</td>
                                        <td>{{ $user->alamat }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection