@extends('layouts.student-main')
@section('content')
<div class="container-fluid">
    <br>        
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Assignment List</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chapter 1:Introduction</td>
                            <td>Open</td>
                            <td>28/02/2022</td>
                            <td><a href="#" class="btn btn-success"><i class="bi-eye"></i> View </a> <a href="#" class="btn btn-primary"><i class="bi-eye"></i> Submit</a></td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Chapter 2:Literature Review</td>
                            <td>Open</td>
                            <td>28/02/2022</td>
                            <td><a href="#" class="btn btn-success"><i class="bi-eye"></i> View </a> <a href="#" class="btn btn-primary"><i class="bi-eye"></i> Submit</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chapter 3:Methodology</td>
                            <td>Open</td>
                            <td>28/02/2022</td>
                            <td><a href="#" class="btn btn-success"><i class="bi-eye"></i> View </a> <a href="#" class="btn btn-primary"><i class="bi-eye"></i> Submit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection