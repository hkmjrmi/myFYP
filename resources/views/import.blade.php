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
                <!--<a class="btn btn-warning" href="{{ route('admin.export') }}">Export User Data</a>-->
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="student" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Email</th> 
            </tr>
            </thead>
            <tbody>
                
            </tbody>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Email</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</div>
@endsection


