@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Assignment List</h2>
                <br>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('assignments.create') }}"> Create New Assignment</a>
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
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($assignments as $assignment)
                        <tr>
                            <td>{{ $assignment->title }}</td>
                            <td>{{ $assignment->description }}</td>
                            <td>
                                <form action="{{ route('assignments.destroy',$assignment->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('assignments.show',$assignment->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('assignments.edit',$assignment->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection