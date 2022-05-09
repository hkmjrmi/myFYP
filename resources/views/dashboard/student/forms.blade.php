@extends('layouts.student-main')
@section('content')
    <div class="container-fluid">
        <br>        
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Form List</h2>
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
                                <td>F1</td>
                                <td>Unavailable</td>
                                <td>Unavailable</td>
                                <td><a href="/student/forms/f1" class="btn btn-success"><i class="bi-eye"></i> View</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>F2</td>
                                <td>Unavailable</td>
                                <td>Unavailable</td>
                                <td><a href="/student/forms/f2" class="btn btn-success"><i class="bi-eye"></i> View</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>F3</td>
                                <td>Unavailable</td>
                                <td>Unavailable</td>
                                <td><a href="/student/forms/f3" class="btn btn-success"><i class="bi-eye"></i> View</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>F4</td>
                                <td>Unavailable</td>
                                <td>Unavailable</td>
                                <td><a href="/student/forms/f4" class="btn btn-success"><i class="bi-eye"></i> View</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>F5</td>
                                <td>Unavailable</td>
                                <td>Unavailable</td>
                                <td><a href="/student/forms/f5" class="btn btn-success"><i class="bi-eye"></i> View</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>F13</td>
                                <td>Unavailable</td>
                                <td>Unavailable</td>
                                <td><a href="/student/forms/f13" class="btn btn-success"><i class="bi-eye"></i> View</a></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>    
@endsection