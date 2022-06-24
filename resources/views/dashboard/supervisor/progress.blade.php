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
            <li class="breadcrumb-item">Progress</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <br>
    <div class="card">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Supervisee Info</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                        <th>Name</th>
                        <td>{{$student->name}}</td>  
                    </tr>
                    <tr>
                        <th>Student ID</th>
                        <td>{{ $student->student_id }}1</td>
                    </tr>
                    <tr>
                        <th>Project Title</th>
                        <td>{{ $student->project }}</td>
                    </tr>
                </table>
             </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Assignment List</h2>
        </div>
        <br>
        @if ($message = Session::get('success'))
                 <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table id="assignment-list" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Assignment Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chapter 1: Introduction</td>
                            <td><a href="{{ $student->chapter1_url }}" target="_blank" class="btn btn-success"><i class="fa fa-eye"> </i>
                                 View</a>
                                <a href="{{ url('supervisor/send-email-approval/'.$student->id) }}"><button class="btn btn-primary"><i class="fa fa-envelope"> </i>
                                    Approve</button></a>
                                <a href="{{ url('supervisor/send-email-disapproval/'.$student->id) }}"><button class="btn btn-danger"><i class="fa fa-envelope"> </i>
                                    Dissaprove</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Chapter 2: Literature Review</td>
                            <td><a href="{{ $student->chapter2_url }}" target="_blank" class="btn btn-success"><i class="fa fa-eye"> </i>
                                View</a>
                               <a href="{{ url('supervisor/send-email-approval/'.$student->id) }}"><button class="btn btn-primary"><i class="fa fa-envelope"> </i>
                                   Approve</button></a>
                               <a href="{{ url('supervisor/send-email-disapproval/'.$student->id) }}"><button class="btn btn-danger"><i class="fa fa-envelope"> </i>
                                   Dissaprove</button></a>
                           </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chapter 3: Methodology</td>
                            <td><a href="{{ $student->chapter3_url }}" target="_blank" class="btn btn-success"><i class="fa fa-eye"> </i>
                                View</a>
                               <a href="{{ url('supervisor/send-email-approval/'.$student->id) }}"><button class="btn btn-primary"><i class="fa fa-envelope"> </i>
                                   Approve</button></a>
                               <a href="{{ url('supervisor/send-email-disapproval/'.$student->id) }}"><button class="btn btn-danger"><i class="fa fa-envelope"> </i>
                                   Dissaprove</button></a>
                           </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Chapter 4: Result and Finding</td>
                            <td><a href="{{ $student->chapter4_url }}" target="_blank" class="btn btn-success"><i class="fa fa-eye"> </i>
                                View</a>
                               <a href="{{ url('supervisor/send-email-approval/'.$student->id) }}"><button class="btn btn-primary"><i class="fa fa-envelope"> </i>
                                   Approve</button></a>
                               <a href="{{ url('supervisor/send-email-disapproval/'.$student->id) }}"><button class="btn btn-danger"><i class="fa fa-envelope"> </i>
                                   Dissaprove</button></a>
                           </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Chapter 5: Conclusion</td>
                            <td><a href="{{ $student->chapter5_url }}" target="_blank" class="btn btn-success"><i class="fa fa-eye"> </i>
                                View</a>
                               <a href="{{ url('supervisor/send-email-approval/'.$student->id) }}"><button class="btn btn-primary"><i class="fa fa-envelope"> </i>
                                   Approve</button></a>
                               <a href="{{ url('supervisor/send-email-disapproval/'.$student->id) }}"><button class="btn btn-danger"><i class="fa fa-envelope"> </i>
                                   Dissaprove</button></a>
                           </td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection