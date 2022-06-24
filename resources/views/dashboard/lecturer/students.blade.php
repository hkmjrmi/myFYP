@extends('layouts.lecturer-main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('lecturer/home') }}">Home</a></li>
            <li class="breadcrumb-item">Students</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <br>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Students List</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table id="student" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Project Title</th>
                        <th>Supervisor Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->student_id}}
                        <td>{{ $student->project }}</td>
                        <td>{{ $student->supervisor->name }}
                        <!--<td><a href="{{ url('lecturer/edit-student/'.$student->id) }}" class="btn btn-primary btn-sm">Edit</a></td>-->
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

