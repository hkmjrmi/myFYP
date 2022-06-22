<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>myFYP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body" style="min-width: 450px;">
            <div class="text-center">
              <img src="{{ asset('vendors/dist/img/myFYPLogo.png') }}" alt="myFYP Logo" class="brand-image img-circle">
              <h1 class="text-dark">my<strong class="text-warning">FYP</strong></h1>
              <h4>Management System</h4>
            </div>
            <hr>
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="social-auth-links text-center mb-3">
              <a href="student/login" class="btn btn-block text-dark" style="background-color: #FAB80B;">Student</a>
              <a href="supervisor/login" class="btn btn-block text-light" style="background-color: #119202"> Supervisor</a>
              <a href="lecturer/login" class="btn btn-block text-light" style="background-color: #832689"> Lecturer</a>
            </div>
            <!-- /.social-auth-links -->
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
      <!-- /.login-box -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendors/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
