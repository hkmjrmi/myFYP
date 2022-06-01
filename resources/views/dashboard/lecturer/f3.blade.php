@extends('layouts.lecturer-main')
@section('content')
<div class="container-fluid">
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">F3</li>
        </ol>
    </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">F3 - Students List</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Project Title</th>
                        <th>Marks</th>
                        <th>Action</th>
                    </tr>
                    @foreach($students as $student)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->student_id}}</td>
                        <td>{{ $student->project }}</td>
                        <td>{{ $student->f3 }}</td>
                        <td><a href="{{ url('lecturer/f3-assessment/'.$student->id) }}" class="btn btn-primary btn-sm">Grade</a>
                            <a href="{{ $student->chapter2_url }}" class="btn btn-success btn-sm">View</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

