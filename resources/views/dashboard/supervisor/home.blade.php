@extends('layouts.supervisor-main')
@section('content')
<div class="container-fluid">
    <br>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Supervisees<sup style="font-size: 20px"></sup></h3>
    
            <p>List of Supervisees</p>
            </div>
            <div class="icon">
            <br>
            <i class="ion-ios-people"></i>
            </div>
            <a href="{{ url('supervisor/supervisees') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Supervisor Profile</h2>
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
                        <td scope="row">{{ Auth::guard('supervisor')->user()->name }}</td>
                        <td>{{ Auth::guard('supervisor')->user()->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection