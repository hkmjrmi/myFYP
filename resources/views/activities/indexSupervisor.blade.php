@extends('layouts.supervisor-main')
@section('content')
    <div class="container-fluid">
        <br>
        <div class="card shadow">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Activity List</h2>
            </div>
            <br>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table id="assignment" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Date Meeting</th>
                            <th>Name</th>
                            <th>Comment</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($activity as $activity)
                        <tr>
                            <td>{{ $activity->dateMeeting }}</td>
                            <td>{{ $activity->name }}</td>
                            <td>{{ $activity->comment }}</td>
                            <td>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection