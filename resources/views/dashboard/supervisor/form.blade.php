@extends('layouts.supervisor-main')
@section('content')
<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Supervisee List</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Student Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach($students as $student)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->id }}
                        <td>{{ $student->email }}</td>
                        <td><a href="{{ url('supervisor/form', $student->id) }}" class="btn btn-info">View</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection