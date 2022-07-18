<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            {{-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                  class="fas fa-search"></i></a></li> --}}
          </ul>
          {{-- <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div> --}}
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Ulasan
                {{-- <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div> --}}
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                @foreach ($ulasans as $u)
                @php
                    $diffInDays = \Carbon\Carbon::parse($u->created_at)->diffInDays();
                    $showDiff = \Carbon\Carbon::parse($u->created_at)->diffForHumans();
                    if ($diffInDays > 0) {
                      $showDiff .= ', '.\Carbon\Carbon::parse($u->created_at)->addDays($diffInDays)->diffInHours().' Hours';
                    }
                @endphp
                <div class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('admin/img/avatar/avatar-1.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>{{ $u->nama }}</b>
                    <p>{{ $u->ulasan}}.</p>
                    <div class="time">{{ $showDiff }}</div>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="dropdown-footer text-center">
                <a href="{{ '/admins/ulasan' }}">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{ asset('admin/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->nama }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{ route('admins.show', auth()->user()->id) }}" class="dropdown-item has-icon">
                <i class="fas fa-user"></i> Profile
              </a>
              <a href="{{ 'admins/user' }}" class="dropdown-item has-icon">
                <i class="fas fa-users"></i> Kelola User
              </a>
              <div class="dropdown-divider"></div>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item text-danger fw-bold"><i class="fas fa-sign-out-alt"></i>&emsp;<span>Logout</span> </button>
              </form>
            </div>
          </li>
        </ul>
      </nav>