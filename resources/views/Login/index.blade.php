<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/weather-icon/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/weather-icon/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/dropzonejs/dropzone.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/chocolat/dist/css/chocolat.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet"
        href="{{ asset('admin/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/jquery-selectric/selectric.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap-social/bootstrap-social.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container" style="margin-top: 4rem">
              <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6  col-xl-5">
                  @if (session()->has('success'))
                  <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      {{ session('success') }}
                    </div>
                  </div>
                  @endif
                  @if (session()->has('loginError'))
                  <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      {{ session('loginError') }}
                    </div>
                  </div>
                  @endif  
                    </div>
              </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6  col-xl-5">
                        <div class="card card-primary">
                            <div class="card-header d-flex justify-content-center">
                                <h3>Login</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ '/login' }}" class="needs-validation" novalidate="">
                                  @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1"
                                            required autofocus value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                              {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="{{ route('forget.password.get') }}" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{-- <a href="{{ "/admins" }}" type="submit" class="btn btn-primary btn-lg btn-block"
                                            tabindex="4">
                                            Login
                                        </a> --}}
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">Login</button>
                                    </div>
                                </form>
                                <div class="mt-5 text-muted text-center">
                                    Don't have an account? <a href="{{ "registrasi" }}">Create account</a>
                                </div>

                            </div>
                        </div>

                        <div class="simple-footer">
                            Copyright &copy; Booking Futsal 2022
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
  <script src="{{ asset('admin/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('admin/modules/popper.js')}}"></script>
  <script src="{{ asset('admin/modules/tooltip.js')}}"></script>
  <script src="{{ asset('admin/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('admin/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('admin/modules/moment.min.js')}}"></script>
  <script src="{{ asset('admin/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('admin/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
  <script src="{{ asset('admin/modules/chart.min.js')}}"></script>
  <script src="{{ asset('admin/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
  <script src="{{ asset('admin/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{ asset('admin/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('admin/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <script src="{{ asset('admin/modules/dropzonejs/min/dropzone.min.js')}}"></script>
  <script src="{{ asset('admin/modules/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{ asset('admin/modules/cleave-js/dist/cleave.min.js')}}"></script>
  <script src="{{ asset('admin/modules/cleave-js/dist/addons/cleave-phone.id.js')}}"></script>
  <script src="{{ asset('admin/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{ asset('admin/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{ asset('admin/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{ asset('admin/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
  <script src="{{ asset('admin/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <script src="{{ asset('admin/modules/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{ asset('admin/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
  <script src="{{ asset('admin/modules/sweetalert/sweetalert.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('admin/js/page/components-multiple-upload.js')}}"></script>
  <script src="{{ asset('admin/js/page/index-0.js')}}"></script>
  <script src="{{ asset('admin/js/page/forms-advanced-forms.js')}}"></script>
  <script src="{{ asset('admin/js/page/modules-sweetalert.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('admin/js/scripts.js')}}"></script>
  <script src="{{ asset('admin/js/custom.js')}}"></script>

  <script>

      function previewImage() {
          const image = document.querySelector('#gambar');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function (oFREvent) {
              imgPreview.src = oFREvent.target.result;
          }
      }

      $('.show_confirm').click(function (event) {
          var form = $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
                  title: `Anda Yakin Data Dihapus?`,
                  text: "Perhatian yang akan dihapus, akan dihapus secara permanen!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                  if (willDelete) {
                      swal('Data berhasil dihapus!', {
                          icon: 'success',
                      });
                      form.submit();
                  } else {
                      swal('Data anda aman!');
                  }
              });

      });

  </script>
</body>

</html>
