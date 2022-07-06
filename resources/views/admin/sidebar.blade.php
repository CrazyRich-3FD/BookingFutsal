<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ url('/admins') }}">Booking Futsal</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/admins') }}">BS</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ $title == "Home" ? 'active' : '' }}"> <a href="{{ url('/admins') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
        <li> <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-columns"></i><span>Landing Page</span></a></li>
        
        <li class="menu-header">Pages</li>
        <li class="{{ $title == "User" ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admins/user') }}"><i class="fas fa-user"></i> <span>User</span></a></li>
        <li class="{{ $title == "Lapangan" ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admins/lapangan') }}"><i class="fas fa-futbol"></i> <span>Lapangan</span></a></li>
        <li class="{{ $title == "Booking" ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admins/booking') }}"><i class="far fa-calendar-alt"></i> <span>Booking</span></a></li>
        <li class="{{ $title == "Pelanggan" ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admins/pelanggan') }}"><i class="fas fa-user-friends"></i> <span>Pelanggan</span></a></li>
        <li class="{{ $title == "Transaksi" ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admins/transaksi') }}"><i class="fas fa-coins"></i> <span>Transaksi</span></a></li>
        <li class="{{ $title == "Ulasan" ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admins/ulasan') }}"><i class="fas fa-comments"></i> <span>Ulasan</span></a></li>

        
    </aside>
  </div>