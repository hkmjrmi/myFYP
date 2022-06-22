@extends('layouts.lecturer-main')
@section('content')
<!-- Main content -->
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1 class="m-0 font-weight-bold text-primary">Form List</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="form-list" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>F2 - Project Motivation Evaluation Form</td>
                        <td><a href="forms/f2">View</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>F3 - Literature Review Evaluation Form</td>
                        <td><a href="forms/f3">View</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>F4 - Methodology Evalution Form </td>
                        <td><a href="forms/f4">View</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>F13 - Lean Model Canvas</td>
                        <td><a href="forms/f13">View</td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
<!-- /.container-fluid -->
@endsection