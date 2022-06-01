@extends('layouts.lecturer-main')
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
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>F1</td>
                        <td><a href="forms/f1">View</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>F2</td>
                        <td><a href="forms/f2">View</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>F3</td>
                        <td><a href="forms/f3">View</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>F4</td>
                        <td><a href="forms/f4">View</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>F13</td>
                        <td><a href="forms/f13">View</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection