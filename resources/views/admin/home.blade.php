@extends('admin.index')

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Admin</h4>
            </div>
            <div class="card-body">
              {{ $admin }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-futbol"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Lapangan</h4>
            </div>
            <div class="card-body">
              {{ $lapangan }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-coins"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Transaksi</h4>
            </div>
            <div class="card-body">
              {{ $transaksi }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Member</h4>
            </div>
            <div class="card-body">
              {{ $member }}
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Statistics Transaksi</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="#" class="btn btn-primary">Week</a>
                <a href="#" class="btn">Month</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <canvas id="myChart" height="182"></canvas>
            <div class="statistic-details mt-sm-4">
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>
                  7%</span>
                <div class="detail-value">$243</div>
                <div class="detail-name">Today's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span>
                  23%</span>
                <div class="detail-value">$2,902</div>
                <div class="detail-name">This Week's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i
                      class="fas fa-caret-up"></i></span>9%</span>
                <div class="detail-value">$12,821</div>
                <div class="detail-name">This Month's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>
                  19%</span>
                <div class="detail-value">$92,142</div>
                <div class="detail-name">This Year's Sales</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Ulasan</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled list-unstyled-border">
              @foreach ($ulasan as $u)
              <li class="media">
                <img class="mr-3 rounded-circle" width="50" src="{{ asset('admin/img/avatar/avatar-1.png') }}" alt="avatar">
                <div class="media-body">
                  <div class="float-right text-primary">Now</div>
                  <div class="media-title">{{ $u->nama }}</div>
                  <span class="text-small text-muted">{{ $u->ulasan}}.</span>
                </div>
              </li>
              @endforeach
              <li class="media">
                <img class="mr-3 rounded-circle" width="50" src="{{ asset('admin/img/avatar/avatar-1.png') }}" alt="avatar">
                <div class="media-body">
                  <div class="float-right text-primary">Now</div>
                  <div class="media-title">Farhan A Mujib</div>
                  <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin.</span>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded-circle" width="50" src="{{ asset('admin/img/avatar/avatar-2.png') }}" alt="avatar">
                <div class="media-body">
                  <div class="float-right">12m</div>
                  <div class="media-title">Ujang Maman</div>
                  <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin.</span>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded-circle" width="50" src="{{ asset('admin/img/avatar/avatar-3.png') }}" alt="avatar">
                <div class="media-body">
                  <div class="float-right">17m</div>
                  <div class="media-title">Rizal Fakhri</div>
                  <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin.</span>
                </div>
              </li>
              <li class="media">
                <img class="mr-3 rounded-circle" width="50" src="{{ asset('admin/img/avatar/avatar-4.png') }}" alt="avatar">
                <div class="media-body">
                  <div class="float-right">21m</div>
                  <div class="media-title">Alfa Zulkarnain</div>
                  <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin.</span>
                </div>
              </li>
            </ul>
            <div class="text-center pt-1 pb-1">
              <a href="{{ url('/ulasan') }}" class="btn btn-primary btn-lg btn-round">
                View All
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    
    {{-- <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Popular Browser</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col text-center">
                <div class="browser browser-chrome"></div>
                <div class="mt-2 font-weight-bold">Chrome</div>
                <div class="text-muted text-small"><span class="text-primary"><i
                      class="fas fa-caret-up"></i></span> 48%</div>
              </div>
              <div class="col text-center">
                <div class="browser browser-firefox"></div>
                <div class="mt-2 font-weight-bold">Firefox</div>
                <div class="text-muted text-small"><span class="text-primary"><i
                      class="fas fa-caret-up"></i></span> 26%</div>
              </div>
              <div class="col text-center">
                <div class="browser browser-safari"></div>
                <div class="mt-2 font-weight-bold">Safari</div>
                <div class="text-muted text-small"><span class="text-danger"><i
                      class="fas fa-caret-down"></i></span> 14%</div>
              </div>
              <div class="col text-center">
                <div class="browser browser-opera"></div>
                <div class="mt-2 font-weight-bold">Opera</div>
                <div class="text-muted text-small">7%</div>
              </div>
              <div class="col text-center">
                <div class="browser browser-internet-explorer"></div>
                <div class="mt-2 font-weight-bold">IE</div>
                <div class="text-muted text-small"><span class="text-primary"><i
                      class="fas fa-caret-up"></i></span> 5%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Authors</h4>
          </div>
          <div class="card-body">
            <div class="row pb-2">
              <div class="col-4 col-sm-2 col-lg-2 mb-4 mb-md-0 offset-1">
                <div class="avatar-item mb-0">
                  <img alt="image" src="{{ asset('admin/img/avatar/avatar-5.png') }}" class="img-fluid" data-toggle="tooltip"
                    title="Fathan M">
                  <div class="avatar-badge" title="Editor" data-toggle="tooltip"><i class="fas fa-wrench"></i>
                  </div>
                </div>
              </div>
              <div class="col-4 col-sm-2 col-lg-2 mb-4 mb-md-0">
                <div class="avatar-item mb-0">
                  <img alt="image" src="{{ asset('admin/img/avatar/avatar-4.png') }}" class="img-fluid" data-toggle="tooltip"
                    title="Ronaldo">
                  <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                </div>
              </div>
              <div class="col-4 col-sm-2 col-lg-2 mb-4 mb-md-0">
                <div class="avatar-item mb-0">
                  <img alt="image" src="{{ asset('admin/img/avatar/avatar-1.png') }}" class="img-fluid" data-toggle="tooltip"
                    title="Eka Fahmi Dinata">
                  <div class="avatar-badge" title="Author" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i>
                  </div>
                </div>
              </div>
              <div class="col-4 col-sm-2 col-lg-2 mb-4 mb-md-0">
                <div class="avatar-item mb-0">
                  <img alt="image" src="{{ asset('admin/img/avatar/avatar-2.png') }}" class="img-fluid" data-toggle="tooltip"
                    title="Fikri A">
                  <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                </div>
              </div>
              <div class="col-4 col-sm-2 col-lg-2 mb-4 mb-md-0">
                <div class="avatar-item mb-0">
                  <img alt="image" src="{{ asset('admin/img/avatar/avatar-2.png') }}" class="img-fluid" data-toggle="tooltip"
                    title="Ema S">
                  <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </section>
</div>

@endsection
