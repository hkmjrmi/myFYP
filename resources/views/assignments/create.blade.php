@extends('layouts.lecturer-main')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Assignment</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('lecturer.assignments.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('lecturer.assignments.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <select class="form-control" name="name" id="name">
                    <option value="Chapter 1: Introduction" selected='selected'>Chapter 1: Introduction</option>
                    <option value="Chapter 2: Literature Review">Chapter 2: Literature Review</option>
                    <option value="Chapter 3: Methodology">Chapter 3: Methodology</option>
                    <option value="Chapter 4: Finding">Chapter 4: Finding</option>
                    <option value="Chapter 5: Conclusion">Chapter 5: Conclusion</option>

                </select>
            </div>
            <div class="form-group">
                <strong>Status:</strong>
                <select class="form-control" name="status" id="status">
                    <option value="Open" selected='selected'>Open</option>
                    <option value="Close">Close</option>
                </select>
            </div>
            <div class="form-group">
                <strong>Deadline:</strong>
                <input type="date" name="deadline" class="form-control" placeholder="Deadline">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection