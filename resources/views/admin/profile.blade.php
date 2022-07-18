@extends('admin.index')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admins.index') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ auth()->user()->nama }}!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>
            <div class="card author-box card-primary">
            <div class="card-body">
              <div class="author-box-left">
                  <img alt="image" src="{{ asset('admin/img/avatar/avatar-1.png') }}"
                      class="rounded-circle author-box-picture">
              </div>
              <div class="author-box-details">
                  <div class="author-box-name d-flex justify-content-between">
                      <label class="text-primary">{{ auth()->user()->nama }}</label>
                      <a href="{{ route('admins.edit', auth()->user()->id) }}" class="btn btn-primary">Changes Profile</a>
                  </div>
                  <div class="author-box-job">{{ auth()->user()->role }}</div>
                  <div class="author-box-description">
                      <table class="table">
                          <tbody>
                              <tr>
                                  <th scope="row" style="width: 5rem">Email</th>
                                  <td style="width: 0">:</td>
                                  <td>{{ auth()->user()->email }}</td>
                              </tr>
                              <tr>
                                  <th scope="row">Username</th>
                                  <td>:</td>
                                  <td>{{ auth()->user()->username }}</td>
                              </tr>
                              <tr>
                                  <th scope="row">No. HP</th>
                                  <td>:</td>
                                  <td>{{ auth()->user()->no_hp }}</td>
                              </tr>
                              <tr>
                                  <th scope="row">Alamat</th>
                                  <td>:</td>
                                  <td>{{ auth()->user()->alamat }}</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
            </div>
        </div>
    </section>
</div>
@endsection
