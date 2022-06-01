@extends('layouts.lecturer-main')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>F2 - PROJECT MOTIVATION FORM</h4>
                    <!--<a href="{{ url('lecturer/forms/f2') }}" class="btn btn-danger float-end">BACK</a>-->
                </div>
                <div class="card-body">
                    <form action="{{ url('/lecturer/update-f2/'.$student->id) }}" method="POST">
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
                            $problem = 3;
                            $evidences = 5;
                            $solution = 2;
                        @endphp
                        <table class="table table-bordered">
                            <tr>
                                <td>Assessment Criteria</td>
                                <td>Weight</td>
                            </tr>
                            <tr>
                                <td>1. Problem identification (Identify problems/issues/opportunities)</td>
                                <td>{{ $problem }}</td>
                            </tr>
                            <tr>
                                <td>2. Evidences (Evidences to support problems/issues/opportunities identified.)</td>
                                <td>{{ $evidences }}</td>
                            </tr>
                            <tr>
                                <td>3. Solutions (Propose solutions.)</td>
                                <td>{{ $solution }}</td>
                            </tr>
                        </table>
                        
                        <div class="form-group mb-3">
                            <label for="">Marks</label>
                            <input type="text" name="f2" value="{{$student->f2}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Grade F2</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection