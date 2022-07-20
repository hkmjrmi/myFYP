@extends('layouts.supervisor-main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('student/home') }}">Home</a></li>
            <li class="breadcrumb-item">Supervisee List</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <br>
    <div class="card">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Supervisee List</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table id="supervisees" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Email</th>
                        <th>Project Title</th>
                        <th colspan="2" style="text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->student_id}}
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->project }}</td>
                        <td>
                            <a href="{{ url('supervisor/progress/'.$student->id) }}"><button class="btn btn-success">Progress</button></a>
                            <!--<a href="{{ url('supervisor/activities/'.$student->id) }}"><button class="btn btn-info">Activity</button></a>-->
                        </td>
                        <td>
                            <a href="{{ url('supervisor/activities/'.$student->id) }}"><button class="btn btn-warning">Activity</button></a>
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

