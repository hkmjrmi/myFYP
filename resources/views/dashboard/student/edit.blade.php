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
                    <h2 class="text-primary font-weight-bold">Upload Assignment</h2>
                </div>
                <div class="card-body">
                    <h5><strong class="text-info">Instruction :</strong> Please upload Google Drive URL with the relevant Assignment</h5>
                    <p class="text-danger">Reminder ! Please make sure the Google Drive URL have been  <strong> allow to view  by all with link</strong>.</p>
                    <form action="{{ url('/student/update/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Chapter 1 URL</label>
                            <input type="text" name="chapter1_url" value="{{$student->chapter1_url}}" class="form-control">
                            <sub class="text-info">Please input chapter 1 Google Drive URL on field above.</sub>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapter 2 URL</label>
                            <input type="text" name="chapter2_url" value="{{$student->chapter2_url}}" class="form-control">
                            <sub class="text-info">Please input chapter 2 Google Drive URL on field above.</sub>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapter 3 URL</label>
                            <input type="text" name="chapter3_url" value="{{$student->chapter3_url}}" class="form-control">
                            <sub class="text-info">Please input chapter 3 Google Drive URL on field above.</sub>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapter 4 URL</label>
                            <input type="text" name="chapter4_url" value="{{$student->chapter4_url}}" class="form-control">
                            <sub class="text-info">Please input chapter 4 Google Drive URL on field above.</sub>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapter 5 URL</label>
                            <input type="text" name="chapter5_url" value="{{$student->chapter5_url}}" class="form-control">
                            <sub class="text-info">Please input chapter 5 Google Drive URL on field above.</sub>
                        </div>
                        <div class="form-group mb-3">
                            <div class="float-right">
                            <button type="submit" class="btn btn-primary">Update URL</button>
                            </div>
                            <div class="float-right mr-2">
                                <a href="{{ url('/student/assignments') }}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection