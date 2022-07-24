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
            <li class="breadcrumb-item"><a href="{{ url('admin/importLecturer') }}">Lecturer List</a></li>
            <li class="breadcrumb-item">Edit Lecturer</li>
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
                    <h2 class="text-primary font-weight-bold">Edit Lecturer</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/update-lecturer/'.$lecturer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$lecturer->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$lecturer->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="{{$lecturer->phone}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Office</label>
                            <input type="text" name="office" value="{{$lecturer->office}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Lecturer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection