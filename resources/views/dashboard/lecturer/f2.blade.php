@extends('layouts.lecturer-main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('lecturer/home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('lecturer/forms') }}">Forms</a></li>
          <li class="breadcrumb-item">F2</li>
      </ol>
      </div><!-- /.col -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- container-fluid -->
<div class="container-fluid mt-3">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2 class="m-0 font-weight-bold text-primary">F2 - Student List</h2>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="form" class="table table-bordered">
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
                        <td>{{ $student->f2 }}</td>
                        <td><a href="{{ url('lecturer/f2-assessment/'.$student->id) }}" class="btn btn-primary btn-sm">Grade</a>
                            <a href="{{ $student->chapter1_url }}" target="_blank" class="btn btn-success btn-sm">View</a>
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

