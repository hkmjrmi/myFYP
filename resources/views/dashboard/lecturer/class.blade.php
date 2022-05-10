@extends('layouts.lecturer-main')
@section('content')
<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Class List</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Total Student</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>CSC2306A</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CSC2306B</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>CSC2306C</td>
                        <td>30</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection