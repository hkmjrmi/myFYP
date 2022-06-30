@extends('layouts.supervisor-main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('supervisor/home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('supervisor/supervisees') }}">Supervisee List</a></li>
            <li class="breadcrumb-item">Activity</li>
            
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <div class="container-fluid">
        <br>
        <div class="card">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Activity List</h2>
            </div>
            <br>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Date Meeting</th>
                            <th>Completed Activity</th>
                            <th>Next Activity/Comment</th>
                            <th>Signature</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($activity as $activity)
                        <tr>
                            <td>{{ $activity->dateMeeting }}</td>
                            <td>{{ $activity->name }}</td>
                            <td>{{ $activity->comment }}</td>
                            <td>{{ $activity->signature }}</td>
                            <td><a href="{{ url('supervisor/activities-supervisee/'.$activity->id) }}" class="btn btn-primary btn-sm">Sign</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection