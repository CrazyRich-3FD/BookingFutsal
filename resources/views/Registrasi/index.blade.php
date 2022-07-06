
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Registrasi</title>

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
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form action="/registrasi" method="POST">
                  @csrf
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="nama">Full name</label>
                      <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror " name="nama" autofocus value="{{ old('nama') }}">
                      @error('nama')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                      
                    </div>
                    {{-- <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div> --}}
                  

                  <div class="form-group col-12">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                  </div>
                  
                  <div class="form-group col-12">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}">
                    @error('username')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                      @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="password-confirm">
                      @error('password-confirm')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>
                   <div class="form-group">
                    <label>No.HP</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </div>
                      </div>
                      <input type="text" name="no_hp" class="form-control phone-number @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}">
                      @error('no_hp')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>
                  <input type="hidden" name="level" value="Bronze">
                  <input type="hidden" name="role" value="Member">

                  @error('level')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror

                      @error('role')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror

                  {{-- <div class="form-divider">
                    Your Home
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Country</label>
                      <select class="form-control selectric">
                        <option>Indonesia</option>
                        <option>Palestine</option>
                        <option>Syria</option>
                        <option>Malaysia</option>
                        <option>Thailand</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Province</label>
                      <select class="form-control selectric">
                        <option>West Java</option>
                        <option>East Java</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>City</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Postal Code</label>
                      <input type="text" class="form-control">
                    </div>
                  </div> --}}

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
            <div class="col-12 simple-footer">
              Copyright &copy; Stisla 2018
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