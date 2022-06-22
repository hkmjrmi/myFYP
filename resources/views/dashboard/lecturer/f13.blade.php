@extends('layouts.lecturer-main')
@section('content')
<!-- container-fluid -->
<div class="container-fluid mt-3">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title m-0 font-weight-bold text-primary">Form List</h1>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="f13" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Project Title</th>
                        <th>Marks</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->student_id}}</td>
                        <td>{{ $student->project }}</td>
                        <td>{{ $student->f4 }}</td>
                        <td><a href="{{ url('lecturer/f13-assessment/'.$student->id) }}" class="btn btn-primary btn-sm">Grade</a>
                            <a href="{{ $student->chapter4_url }}" target="_blank" class="btn btn-success btn-sm">View</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
              <tfoot>
              <tr>
                    <th>No</th>
                    <th>Student Name</th>
                    <th>Student ID</th>
                    <th>Project Title</th>
                    <th>Marks</th>
                    <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
<!-- /.container-fluid -->
@endsection

