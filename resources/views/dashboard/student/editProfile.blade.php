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
            <li class="breadcrumb-item"><a href="{{ url('student/assignments') }}">Assignment</a></li>
            <li class="breadcrumb-item">Upload Assignment</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <br>

            <div class="card">
                <div class="card-header">
                    <h2 class="text-primary font-weight-bold">Edit Profile</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('/student/updateProfile/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Project Title</label>
                            <input type="text" name="project" value="{{$student->project}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection