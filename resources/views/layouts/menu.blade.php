<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{ url('/home') }}" class="navbar-brand p-0">
            <h3 class="m-0 text-primary"><img class="" style="width:40px;" src="{{ asset('/template/img/logo.jpeg') }}" alt=""> Booking Futsal</h3>
            
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/home') }}" class="nav-item nav-link">Home</a>
                <a href="{{ url('/lapangan-list') }}" class="nav-item nav-link">Lapangan</a>
                {{-- <a href="" class="nav-item nav-link">Service</a> --}}
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="" class="dropdown-item">Pricing Plan</a>
                        <a href="" class="dropdown-item">Our Dentist</a>
                        <a href="" class="dropdown-item">Testimonial</a>
                        <a href="" class="dropdown-item">Appointment</a>
                    </div>
                </div> --}}
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            {{-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> --}}
            <a href="{{ url('/admins') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
        </div>
    </nav>

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->