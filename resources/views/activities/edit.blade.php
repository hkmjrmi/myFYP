@extends('layouts.student-main')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit activity</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('student.activities.index') }}"> Back</a>
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

    <form action="{{ route('student.activities.update',$activity->id) }}" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Meeting</strong>
                    <input type="date" name="dateMeeting" value="{{ $activity->dateMeeting }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $activity->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Comment</strong>
                    <input type="text" name="comment" value="{{ $activity->comment }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection