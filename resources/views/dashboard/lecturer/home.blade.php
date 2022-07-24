@extends('layouts.lecturer-main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
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
                <a href="{{ url('lecturer/assignments') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <div class="inner">
                <h3>Student<sup style="font-size: 20px"></sup></h3>
                <p>List of Student</p>
            </div>
            <br>
            <div class="icon">
                <i class="ion-ios-people"></i>
            </div>
            <a href="{{ url('lecturer/students') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Forms</h3>
                <p>List of Form</p>
              </div>
              <br>
              <div class="icon">
                <i class="ion-document"></i>
              </div>
              <a href="{{ url('lecturer/forms') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
    </div>
    <div class="card">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Lecturer Profile</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Office</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td scope="row">{{ Auth::guard('lecturer')->user()->name }}</td>
                        <td>{{ Auth::guard('lecturer')->user()->lecturer_id }}</td>
                        <td>{{ Auth::guard('lecturer')->user()->email }}</td>
                        <td>{{ Auth::guard('lecturer')->user()->phone }}</td>
                        <td>{{ Auth::guard('lecturer')->user()->office }}</td>
                        <td><a href= {{url('/lecturer/editProfile')  }} class="btn btn-warning">Update</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection