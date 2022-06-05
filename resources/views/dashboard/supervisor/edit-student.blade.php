@extends('layouts.supervisor-main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student</h4>
                        <a href="{{ url('supervisor/supervisees') }}" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('/supervisor/update-supervisee/'.$student->id) }}" method="POST">
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