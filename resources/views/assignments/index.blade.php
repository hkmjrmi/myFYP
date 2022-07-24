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
            <li class="breadcrumb-item">Assignment</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <div class="container-fluid">
        <br>
        <div class="card shadow">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Assignment List</h2>
                <br>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('lecturer.assignments.create') }}"> Create New Assignment</a>
                </div>
                <br>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            </div>
            <br>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table id="assignment" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($assignments as $assignment)
                        <tr>
                            <td>{{ $assignment->name }}</td>
                            <td>{{ $assignment->deadline }}</td>
                            <td>
                                <form action="{{ route('lecturer.assignments.destroy',$assignment->id) }}" method="POST">
                                <a class="btn btn-warning" href="{{ route('lecturer.assignments.edit',$assignment->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
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