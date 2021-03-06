@extends('errors::minimal')

@section('title', __('Forbidden'))
{{-- @section('code', '403') --}}
@section('message')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>403 &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex justify-content-center">
        <div class="page-error">
          <div class="page-inner">
            <h1>403</h1>
            <div class="page-description">
            	You do not have access to this page.
            </div>
            <div class="page-search">
              <div class="mt-3">
                <a href="{{ route('index') }}" class="btn btn-primary btn-lg py-2 px-5">Back to Home</a>
              </div>
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

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('admin/js/scripts.js')}}"></script>
  <script src="{{ asset('admin/js/custom.js')}}"></script>
</body>
</html>
@endsection
