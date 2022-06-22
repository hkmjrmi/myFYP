@extends('layouts.lecturer-main')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="m-0 font-weight-bold text-primary">F3- LITERATURE REVIEW EVALUATION FORM</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/lecturer/update-f3/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered">
                            <tr>
                                <th>Student Name</th>
                                <td>{{$student->name}}</td>
                                <th>Student ID</th>
                                <td>{{ $student->student_id }}</td>
                            </tr>
                            <tr>
                                <th>Program</th>
                                <td colspan="3">CS230</td>
                            </tr>
                            <tr>
                                <th>Supervisor</th>
                                <td colspan="3">{{ $student->supervisor->name}}</td>
                            </tr>
                            <tr>
                                <th>Project Title</th>
                                <td colspan="3">{{ $student->project}}</td>
                            </tr>
                        </table>
                        <br>
                        @php
                            $criteria1 = 2;
                            $criteria2 = 4;
                            $criteria3 = 4;
                        @endphp
                        <table class="table table-bordered">
                            <tr>
                                <th>Assessment Criteria</th>
                                <th>Weight</th>
                            </tr>
                            <tr>
                                <td>1. Mind map/Diagram/Table
                                    (Identify problems/issues/opportunities)</td>
                                <td>{{ $criteria1 }}</td>
                            </tr>
                            <tr>
                                <td>2. List of References
                                    (Knowledge of the field/sources)</td>
                                <td>{{ $criteria2 }}</td>
                            </tr>
                            <tr>
                                <td>3. Writing
                                    (Summary based on references)</td>
                                <td>{{ $criteria3 }}</td>
                            </tr>
                        </table>
                        
                        <div class="form-group mb-3">
                            <label for="">Marks</label>
                            <input type="text" name="f3" value="{{$student->f3}}" class="form-control">
                        </div>
                        <div class="float-right">
                            <div class="form-group mb-3">
                                <a href="{{ url('lecturer/forms/f3') }}" class="btn btn-danger float-end">Back</a> 
                                <button type="submit" class="btn btn-primary">Grade F3</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection