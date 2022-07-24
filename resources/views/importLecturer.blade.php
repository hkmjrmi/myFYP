@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <br>
    <div class="card bg-light mt-3">
        <div class="card-header">
            <h2 class="m-0 font-weight-bold text-primary">Lecturer Import Export</h2>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.importLecturer') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Lecturer Data</button>
                <a class="btn btn-warning" href="{{ route('admin.lecturerExport') }}">Export Lecturer Data</a>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Lecturer ID</th>
                <th>Email</th> 
                <th>Phone</th>
                <th>Office</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($lecturers as $lecturer)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->lecturer_id }}</td>
                    <td>{{ $lecturer->email }}</td>
                    <td>{{ $lecturer->phone }}</td>
                    <td>{{ $lecturer->office }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Lecturer ID</th>
                <th>Email</th> 
                <th>Phone</th>
                <th>Office</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</div>
@endsection


