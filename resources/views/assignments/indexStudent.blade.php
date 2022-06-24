@extends('layouts.student-main')
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
                <li class="breadcrumb-item">Assignment</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <br>
        <div class="card">
            <div class="card-header">
                <h2 class="m-0 font-weight-bold text-primary">Assignment List</h2>
                <br>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
               <p>{{ $message }}</p>
            </div>
             @endif
            <br> 
            <div class="card-body">
                <div class="table-responsive">
                    <table id="assignment-list" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Deadline</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($assignments as $assignment)
                        <tr>
                            <td>{{ $assignment->name }}</td>
                            <td>{{ $assignment->deadline }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <div class="float-right">
            <a href= {{url('/student/edit')  }} target="_blank"><button id="upload" class="btn btn-success" onclick="uploadFunction()">Upload</button></a>
            <a href="{{ url('student/send-email') }}"><button id="send" class="btn btn-warning" disabled>Send</button></a>
        </div>
    </div>
@endsection