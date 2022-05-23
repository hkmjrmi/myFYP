@extends('layouts.supervisor-main')
@section('content')
<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Supervisee List</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Student Name</th>
                        <th>Student Email</th>
                        <th>Supervisor Name</th>
                    </tr>
                    @foreach($students as $student)
                    <tr>
                        
                        <td>{{ $student->id }}
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->supervisor->name }}</td>
                        
                    </tr>
                    @endforeach
                    <!--
                    <tr>
                        <td>1</td>
                        <td>Aruffin bin Abdul Salam</td>
                        <td>2020872301</td>
                        <td>CS2306C</td>
                        <td><a href="progress" class="btn btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ariffin bin Abdul Salam</td>
                        <td>2020872302</td>
                        <td>CS2306A</td>
                        <td><a href="#" class="btn btn-primary">View</a></td>
                    </tr>
                    -->
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

