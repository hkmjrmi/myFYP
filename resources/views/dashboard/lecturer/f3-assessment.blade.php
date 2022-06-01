@extends('layouts.lecturer-main')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>F1</h4>
                    <a href="{{ url('lecturer/forms/f3') }}" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('/lecturer/update-f3/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Project Title</label>
                            <input type="text" name="email" value="{{$student->project}}" class="form-control" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">F3</label>
                            <input type="text" name="f3" value="{{$student->f3}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Grade F3</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection