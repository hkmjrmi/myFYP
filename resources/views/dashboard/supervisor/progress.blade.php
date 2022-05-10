@extends('layouts.supervisor-main')
@section('content')
<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Supervisee Info</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>Name</th>
                        <td>Aruffin bin Abdul Salam</td>  
                    </tr>
                    <tr>
                        <th>Student ID</th>
                        <td>2020872301</td>
                    </tr>
                    <tr>
                        <th>Project Title</th>
                        <td>Animal Recognition Using YOLO</td>
                            
                    </tr>
                </table>
             </div>
        </div>
    </div>
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
                            <th>Assignment Name</th>
                            <th>Status</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chapter 1: Introduction</td>
                            <td>Unavailable</td>
                            <td>Unavailable</td>
                            <td>
                                <a href="https://docs.google.com/document/d/18nE3k0NwbvUPJBdQM60L5ruZupMnWtk8/edit" target="_blank" role="button" class="btn btn-success">View</a>
                                <a href="#updateModal" role="button" class="btn btn-warning" data-bs-toggle="modal">Update</a>
                                <a href="#myModal" role="button" class="btn btn-primary" data-bs-toggle="modal">Confirm</a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Chapter 2: Literature Review</td>
                            <td>Unavailable</td>
                            <td>Unavailable</td>
                            <td>
                                <a href="https://docs.google.com/document/d/18nE3k0NwbvUPJBdQM60L5ruZupMnWtk8/edit" target="_blank" role="button" class="btn btn-success">View</a>
                                <a href="#updateModal" role="button" class="btn btn-warning" data-bs-toggle="modal">Update</a>
                                <a href="#myModal" role="button" class="btn btn-primary" data-bs-toggle="modal">Confirm</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chapter 3: Methodology</td>
                            <td>Unavailable</td>
                            <td>Unavailable</td>
                            <td>
                                <a href="https://docs.google.com/document/d/18nE3k0NwbvUPJBdQM60L5ruZupMnWtk8/edit" target="_blank" role="button" class="btn btn-success">View</a>
                                <a href="#updateModal" role="button" class="btn btn-warning" data-bs-toggle="modal">Update</a>
                                <a href="#myModal" role="button" class="btn btn-primary" data-bs-toggle="modal">Confirm</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection