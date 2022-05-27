@extends('layouts.student-main')
@section('content')
<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Supervisor Info</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Office</th>
                    </tr>
                    <tr>
                        <td scope="row">{{ Auth::guard('student')->user()->supervisor->name }}</td>
                        <td>{{ Auth::guard('student')->user()->supervisor->supervisor_id }}</td>
                        <td>{{ Auth::guard('student')->user()->supervisor->email }}</td>
                        <td>{{ Auth::guard('student')->user()->supervisor->phone }}</td>
                        <td>{{ Auth::guard('student')->user()->supervisor->office }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection