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
                        <th>Email</th>
                        <th>Project Title</th>
                        <th>Progress</th>
                    </tr>
                    @foreach($students as $student)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->student_id}}
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->project }}</td>
                        <td><a href="{{ $student->chapter1_url }}" class="btn btn-info">Chapter 1</a>
                        <a href="{{ $student->chapter2_url }}" class="btn btn-info">Chapter 2</a>
                        <a href="{{ $student->chapter3_url }}" class="btn btn-info">Chapter 3</a>
                        <a href="{{ $student->chapter4_url }}" class="btn btn-info">Chapter 4</a>
                        <a href="{{ $student->chapter5_url }}" class="btn btn-info">Chapter 5</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

