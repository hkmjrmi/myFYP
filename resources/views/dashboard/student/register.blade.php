<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>student Register</h4><hr>
                 <form action="{{ route('student.create') }}" method="post">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                         <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="student_id">Student ID</label>
                        <input type="text" class="form-control" name="student_id" placeholder="Enter Student ID" value="{{ old('student_id') }}">
                        <span class="text-danger">@error('student_id'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="lecturer_id">lecturer</label>
                        <input type="text" class="form-control" name="lecturer_id" placeholder="Enter Lecturer ID" value="{{ old('lecturer_id') }}">
                        <span class="text-danger">@error('lecturer_id'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="supervisor_id">Supervisor</label>
                        <input type="text" class="form-control" name="supervisor_id" placeholder="Enter Supervisor ID" value="{{ old('supervisor_id') }}">
                        <span class="text-danger">@error('supervisor_id'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="project">Project</label>
                        <input type="text" class="form-control" name="project" placeholder="Enter Project Title" value="{{ old('project') }}">
                        <span class="text-danger">@error('project'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Register</button>
                     </div>
                     <br>
                     <a href="{{ route('student.login') }}">I already have an account, Login now</a>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>