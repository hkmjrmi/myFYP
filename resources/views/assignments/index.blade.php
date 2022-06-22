@extends('layouts.lecturer-main')
@section('content')
    <div class="container-fluid">
        <br>
        <div class="card shadow">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Assignment List</h2>
                <br>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('lecturer.assignments.create') }}"> Create New Assignment</a>
                </div>
                <br>
                @if ($message = Session::get('success'))
                 <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            </div>
            <br>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table id="assignment" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($assignments as $assignment)
                        <tr>
                            <td>{{ $assignment->name }}</td>
                            <td>{{ $assignment->status }}</td>
                            <td>{{ $assignment->deadline }}</td>
                            <td>
                                <form action="{{ route('lecturer.assignments.destroy',$assignment->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('lecturer.assignments.show',$assignment->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('lecturer.assignments.edit',$assignment->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection