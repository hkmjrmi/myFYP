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
    <div class="login-box" style="min-width: 500px;">
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <div class="text-center">
              <a href="/"><img src="{{ asset('vendors/dist/img/myFYPLogo.png') }}" alt="myFYP Logo" class="brand-image img-circle"></a>
              <h1 class="text-dark">my<strong class="text-warning">FYP</strong></h1>
              <h4>Management System</h4>
            </div>
            <hr>
            <h4 class="login-box-msg mb-4">Supervisor Login</h4>
            <form action="{{ route('supervisor.check') }}" method="post">
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @csrf
                 <div class="form-group text-center">
                     <label for="email">Email</label>
                     <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                     <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                 </div>
                 <div class="form-group text-center">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                     <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                 </div>
                 <div class="form-group float-right">
                     <button type="submit" class="btn btn-primary">Login</button>
                 </div>
                 <br>
                 <a href="{{ route('supervisor.register') }}">Create new Account</a>
             </form>
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