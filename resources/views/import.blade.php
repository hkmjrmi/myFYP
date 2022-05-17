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
            <form action="{{ route('admin.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ route('admin.export') }}">Export User Data</a>
            </form>
        </div>
    </div>
    <table class="table table-bordered" width="100%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->password }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

