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
                    <h4 class="m-0 font-weight-bold text-primary">F4 - METHODOLOGY EVALUATION FORM</h4>
                    <a href="{{ url('lecturer/forms/f4') }}" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('/lecturer/update-f4/'.$student->id) }}" method="POST">
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
                            $criteria1 = 3;
                            $criteria2 = 3;
                            $criteria3 = 4;
                        @endphp
                        <table class="table table-bordered">
                            <tr>
                                <th>Assessment Criteria</th>
                                <th>Weight</th>
                            </tr>
                            <tr>
                                <td>1. Design of the methodology
                                    (Appropriate and comprehensible design of the methodology)</td>
                                <td>{{ $criteria1 }}</td>
                            </tr>
                            <tr>
                                <td>2. Description
                                    (Comprehensible and detailed description of each component in methodology)</td>
                                <td>{{ $criteria2 }}</td>
                            </tr>
                            <tr>
                                <td>3. Model/Technique/Method
                                    (Model/Technique/Method employed)</td>
                                <td>{{ $criteria3 }}</td>
                            </tr>
                        </table>
                        
                        <div class="form-group mb-3">
                            <label for="">Marks</label>
                            <input type="text" name="f4" value="{{$student->f4}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Grade F4</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection