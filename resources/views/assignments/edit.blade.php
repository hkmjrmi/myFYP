@extends('layouts.lecturer-main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="m-0 font-weight-bold text-primary">Update Assignment</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                     @endif
                    <form action="{{ route('lecturer.assignments.update',$assignment->id) }}" method="POST">
                        @csrf
                        
                        @method('PUT')
                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $assignment->name }}" class="form-control"placeholder="Name" disabled>
                                </div>
                                <div class="form-group">
                                    <strong>Current Deadline:</strong>
                                    <input type="string" name="name" value="{{ $assignment->deadline }}" class="form-control"placeholder="Name" disabled>
                                </div>
                                <div class="form-group">
                                    <strong>New Deadline:</strong>
                                    <input type="date" name="deadline" value="{{ $assignment->deadline }}" class="form-control" placeholder="Deadline">
                                </div>
                            </div>      
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lecturer.assignments.index') }}"> Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection