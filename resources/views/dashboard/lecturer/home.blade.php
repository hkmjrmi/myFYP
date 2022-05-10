@extends('layouts.lecturer-main')
@section('content')
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Lecturer Profile</h2>
            </div>
            <br>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        <tr>
                            <td scope="row">{{ Auth::guard('lecturer')->user()->name }}</td>
                            <td>{{ Auth::guard('lecturer')->user()->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection