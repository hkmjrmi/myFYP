@extends('layouts.lecturer-main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>F1</h4>
                    <a href="{{ url('lecturer/forms/f1') }}" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('/lecturer/update-f1/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="email" value="{{$student->email}}" class="form-control" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project</label>
                            <input type="text" name="project" value="{{$student->project}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Grade F1</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection