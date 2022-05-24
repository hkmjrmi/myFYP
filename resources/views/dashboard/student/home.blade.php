@extends('layouts.student-main')
@section('content')
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Student Profile</h2>
            </div>
            <br>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Name</th>
                            <th>Student ID</th>
                            <th>Email</th>
                            <th>Project Title</th>
                            <th>Lecturer Name</th>
                            <th>Supervisor Name</th>
                        </tr>
                        <tr>
                            <td scope="row">{{ Auth::guard('student')->user()->name }}</td>
                            <td>{{ Auth::guard('student')->user()->student_id }}</td>
                            <td>{{ Auth::guard('student')->user()->email }}</td>
                            <td>{{ Auth::guard('student')->user()->project }}</td>
                            <td>{{ Auth::guard('student')->user()->supervisor->name }}</td>
                            <td>{{ Auth::guard('student')->user()->lecturer->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
