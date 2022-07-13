<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="{{ url('/home') }}" class="navbar-brand p-0">
        <h3 class="m-0 text-primary"><img class="" style="width:40px;" src="{{ asset('/template/img/logo.jpeg') }}"
                alt=""> Booking Futsal</h3>

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ url('/home') }}" class="nav-item nav-link {{ $title == "Home" ? 'active' : '' }}">Home</a>
            <a href="{{ url('/lapangan-list') }}" class="nav-item nav-link {{ $title == "List-Lapangan" ? 'active' : '' }}">Lapangan</a>
            {{-- <a href="" class="nav-item nav-link">Service</a> --}}
            <a href="{{ url('/contact') }}" class="nav-item nav-link {{ $title == "Contact" ? 'active' : '' }}">Contact</a>
        </div>
        {{-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> --}}
        @auth
            <div class="btn-group">
                <button type="button" class="btn btn-primary py-2 px-4 ms-3 dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                     Welcome, {{ auth()->user()->nama }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end mt-2">
                    {{-- <li><a class="dropdown-item" href="{{ '/admins' }}">Dashboard</a></li> --}}
                    <div class="dropdown-divider"></div>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item fw-bold"><i class="bi bi-box-arrow-right"></i>&emsp;<span>Logout</span></button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
        <a href="{{ url('/login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
        @endauth
        


    </div>
</nav>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->
