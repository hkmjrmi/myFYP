@extends('layouts.student-main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('student/home') }}">Home</a></li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!--Content-->
    <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>Assignment<sup style="font-size: 20px"></sup></h3>
            
                    <p>List of Assignment</p>
                    </div>
                    <div class="icon">
                    <br>
                    <i class="ion-document-text"></i>
                    </div>
                    <a href="{{ url('student/assignments') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Supervisor<sup style="font-size: 20px"></sup></h3>
        
                        <p>Information</p>
                    </div>
                    <br>
                    <div class="icon">
                        <i class="ion-ios-person"></i>
                    </div>
                    <a href="{{ url('student/supervisor') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        <br>
        <div class="card">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Student Profile</h2>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <br>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Name</th>
                            <th>Student ID</th>
                            <th>Email</th>
                            <th>Project Title</th>
                            <th>Lecturer Name</th>
                            <th>Supervisor Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td scope="row">{{ Auth::guard('student')->user()->name }}</td>
                            <td>{{ Auth::guard('student')->user()->student_id }}</td>
                            <td>{{ Auth::guard('student')->user()->email }}</td>
                            <td>{{ Auth::guard('student')->user()->project }}</td>
                            <td>{{ Auth::guard('student')->user()->supervisor->name }}</td>
                            <td>{{ Auth::guard('student')->user()->lecturer->name }}</td>
                            <td><a href= {{url('/student/editProfile')  }} class="btn btn-warning">Update</button></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
