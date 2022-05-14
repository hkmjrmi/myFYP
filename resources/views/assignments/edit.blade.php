@extends('layouts.main')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Assignment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('assignments.index') }}"> Back</a>
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

    <form action="{{ route('assignments.update',$assignment->id) }}" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $assignment->name }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Status</strong>
                    <input type="text" name="status" value="{{ $assignment->status }}" class="form-control" placeholder="Status">
                </div>
                <div class="form-group">
                    <strong>Deadline</strong>
                    <input type="date" name="deadline" value="{{ $assignment->deadline }}" class="form-control" placeholder="Deadline">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection