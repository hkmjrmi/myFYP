@extends('layouts.lecturer-main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="m-0 font-weight-bold text-primary">Update Student</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/lecturer/update-student/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
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
                        <div class="float-right">
                            <div class="form-group mb-3">
                                <a href="{{ url('lecturer/students') }}" class="btn btn-danger float-end">Back</a>
                                <button type="submit" class="btn btn-primary">Update Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection