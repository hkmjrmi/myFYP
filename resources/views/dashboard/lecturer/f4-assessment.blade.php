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
                </div>
                <div class="card-body">
                    <form name="calculator" action="{{ url('/lecturer/update-f4/'.$student->id) }}" method="POST">
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
                        <table class="table table-bordered">
                            <tr>
                                <th>Assessment Criteria</th>
                                <th>Weight</th>
                                <th>Score (1-10)</th>
                                <th>Marks</th>
                            </tr>
                            <tr>
                                <td>1. Design of the methodology
                                    (Appropriate and comprehensible design of the methodology)</td>
                                <td><input type="text" name="weight1" value="3" disabled></td>
                                <td><input type="text" name="score1"></td>
                                <td><input type="text" name="marks1" disabled></td>
                            </tr>
                            <tr>
                                <td>2. Description
                                    (Comprehensible and detailed description of each component in methodology)</td>
                                <td><input type="text" name="weight2" value="3" disabled></td>
                                <td><input type="text" name="score2"></td>
                                <td><input type="text" name="marks2" disabled></td>
                            </tr>
                            <tr>
                                <td>3. Model/Technique/Method
                                    (Model/Technique/Method employed)</td>
                                <td><input type="text" name="weight3" value="4" disabled></td>
                                <td><input type="text" name="score3"></td>
                                <td><input type="text" name="marks3" disabled></td>
                            </tr>
                            <tr>
                                <td colspan="2">Total</td>
                                <td><input type="button" value="Compute" class="btn btn-success" onclick="javascript:computef4();"></td>
                                <td><input type="text" name="total" disabled></td>
                            </tr>
                        </table>
                        <div class="form-group mb-3">
                            <label for="">Marks</label>
                            <input type="text" name="f4" value="{{$student->f4}}" class="form-control">
                        </div>
                        <div class="float-right">
                            <div class="form-group mb-3">
                                <a href="{{ url('lecturer/forms/f4') }}" class="btn btn-danger float-end">Back</a> 
                                <button type="submit" class="btn btn-primary">Grade F4</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection