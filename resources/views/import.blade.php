@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <br>
    <div class="card bg-light mt-3">
        <div class="card-header">
            <h2 class="m-0 font-weight-bold text-primary">Student Import Export</h2>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.importStudent') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Student Data</button>
                <a class="btn btn-warning" href="{{ route('admin.studentExport') }}">Export Student Data</a>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Email</th> 
                <th>Password</th>
                <th>Supervisor</th>
                <th>Lecturer</th>
                <th>Project</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->password }}</td>
                <td>{{ $student->supervisor_id }}</td>
                <td>{{ $student->lecturer_id }}</td>
                <td>{{ $student->project }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</div>
@endsection


