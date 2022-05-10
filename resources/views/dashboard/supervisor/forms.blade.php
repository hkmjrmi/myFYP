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
            <h2 class="m-0 font-weight-bold text-primary">F5 - Proposal/Project In-Progress Form</h2>
        </div>
        <br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Date of Meeting</th>
                            <th>Completed Activity</th>
                            <th>Next Activity/Comment</th>
                            <th>Signature</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10/01/2022</td>
                            <td>Chapter 1 Outline</td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>10/01/2022</td>
                            <td>Chapter 1 Draft</td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>10/01/2022</td>
                            <td>Chapter 1 Updated Draft</td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tr>            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection