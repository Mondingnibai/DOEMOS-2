<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" value="{{ csrf_token() }}"/>
  <title>@yield('page-title')</title>

  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/dist/css/adminlte.min.css') }}">
  <!-- daterange picker css -->
  <link rel="stylesheet" href="{{ asset('vendor/plugins/daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/plugins/dropzone/min/dropzone.css') }}">
</head> 
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Top Menu -->
    @include('layouts.admin.header')

    <!-- Left Menu --> 
    @include('layouts.admin.sidebar')

    <div class="content-wrapper">
     
      @include('layouts.admin.title')

      <div class="content">
        <div class="container-fluid">
          <div id="app">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

    <!-- Footer --> 
    @include('layouts.admin.footer')
  </div>
  <!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('vendor/plugins/jquery/jquery.min.js') }}"></script>
<!-- date range picker --> 
<script src="{{ asset('vendor/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/plugins/dropzone/min/dropzone.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
