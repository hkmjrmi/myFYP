@extends('layouts.student-main')
@section('content')
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Activity List</h2>
                <br>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('student.activities.create') }}"> Create New Activity</a>
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
                            <th>Date Meeting</th>
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Signature</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($activity as $activity)
                        <tr>
                            <td>{{ $activity->dateMeeting }}</td>
                            <td>{{ $activity->name }}</td>
                            <td>{{ $activity->comment }}</td>
                            <td>{{ $activity->signature }}</td>
                            <td>
                                <form action="{{ route('student.activities.destroy',$activity->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('student.activities.show',$activity->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('student.activities.edit',$activity->id) }}">Edit</a>
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