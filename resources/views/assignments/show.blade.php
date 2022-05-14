@extends('layouts.lecturer-main')
@section('content')
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Assignments</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('assignments.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $assignment->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $assignment->status }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deadline:</strong>
                {{ $assignment->deadline }}
            </div>
        </div>
    </div>
@endsection