@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/importStudent') }}">Student List</a></li>
            <li class="breadcrumb-item">Edit Student</li>
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

            <div class="card">
                <div class="card-header">
                    <h2 class="text-primary font-weight-bold">Edit Student</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/update-student/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Student ID</label>
                            <input type="text" name="student_id" value="{{$student->student_id}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="email" value="{{$student->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project</label>
                            <input type="text" name="project" value="{{$student->project}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Lecturer ID</label>
                            <input type="text" name="lecturer_id" value="{{$student->lecturer_id}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Supervisor ID</label>
                            <input type="text" name="supervisor_id" value="{{$student->supervisor_id}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection