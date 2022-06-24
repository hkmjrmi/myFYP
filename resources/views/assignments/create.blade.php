@extends('layouts.lecturer-main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="m-0 font-weight-bold text-primary">Create Assignment</h4>
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
                                    <strong>Deadline:</strong>
                                    <input type="date" name="deadline" class="form-control" placeholder="Deadline">
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