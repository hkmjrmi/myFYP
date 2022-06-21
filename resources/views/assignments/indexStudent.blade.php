@extends('layouts.student-main')
@section('content')
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Assignment List</h2>
                <br>
            </div>
            <br> 
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Deadline</th>
                        </tr>
                        @foreach ($assignments as $assignment)
                        <tr>
                            <td>{{ $assignment->name }}</td>
                            <td>{{ $assignment->status }}</td>
                            <td>{{ $assignment->deadline }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="float-right">
                        <a href= {{url('/student/edit')  }} target="_blank"><button id="upload" class="btn btn-success btn-sm" onclick="uploadFunction()">Upload</button></a>
                        <a href="{{ url('student/send-email') }}"><button id="send" class="btn btn-warning btn-sm" disabled>Send</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection