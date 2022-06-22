@extends('layouts.student-main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <br>

            <div class="card">
                <h1>Upload Assignment</h1>
                <div class="card-header">
                    <div class="float-right">
                        <a href="{{ url('/student/home') }}" class="bi bi-box-arrow-in-left btn btn-danger float-end"><i class="fa fa-backward"></i> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('/student/update/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Chapter 1 URL</label>
                            <input type="text" name="chapter1_url" value="{{$student->chapter1_url}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapter 2 URL</label>
                            <input type="text" name="chapter2_url" value="{{$student->chapter2_url}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapter 3 URL</label>
                            <input type="text" name="chapter3_url" value="{{$student->chapter3_url}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapter 4 URL</label>
                            <input type="text" name="chapter4_url" value="{{$student->chapter4_url}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapter 5 URL</label>
                            <input type="text" name="chapter5_url" value="{{$student->chapter5_url}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update URL</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection