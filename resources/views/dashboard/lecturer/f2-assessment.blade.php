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
                    <h4 class="m-0 font-weight-bold text-primary">F2 - PROJECT MOTIVATION FORM</h4>            
                </div>
                <!--
                <div class="card-body">
                    <form name="calculator">
                        Input 1: <input type="text" name="first"><br><br>
                        Input 2: <input type="text" name="second"><br>
                        <hr>
                        <input type="button" value="ADD" onclick="javascript:addition();">
                        <input type="button" value="SUB" onclick="javascript:subtraction();">
                        <input type="button" value="MUL" onclick="javascript:multiply();">
                        <input type="button" value="DIV" onclick="javascript:division();">
                        <input type="button" value="MOD" onclick="javascript:modulus();">
                        <hr>
                        Output: <input type="text" name="total">
                        <hr>
                    </form>
                </div>
                !-->
                <div class="card-body">
                    <form name="calculator" action="{{ url('/lecturer/update-f2/'.$student->id) }}" method="POST">
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
                        <table class="table table-bordered">
                            <tr>
                                <th>Assessment Criteria</th>
                                <th>Weight</th>
                                <th>Score (1-10)</th>
                                <th>Marks</th>
                            </tr>
                            <tr>
                                <td>1. Problem identification (Identify problems/issues/opportunities)</td>
                                <td><input type="text" name="weight1" value="3" disabled></td>
                                <td><input type="text" name="score1"></td>
                                <td><input type="text" name="marks1" disabled></td>
                                
                            </tr>
                            <tr>
                                <td>2. Evidences (Evidences to support problems/issues/opportunities identified.)</td>
                                <td><input type="text" name="weight2" value="5" disabled></td>
                                <td><input type="text" name="score2"></td>
                                <td><input type="text" name="marks2" disabled></td>
                                
                            </tr>
                            <tr>
                                <td>3. Solutions (Propose solutions.)</td>
                                <td><input type="text" name="weight3" value="2" disabled></td>
                                <td><input type="text" name="score3"></td>
                                <td><input type="text" name="marks3" disabled></td>
                            </tr>
                            <tr>

                                <td colspan="2">Total</td>
                                <td><input type="button" value="Compute" class="btn btn-success" onclick="javascript:computef2();"></td>
                                <td><input type="text" name="total" disabled></td>
                            </tr>
                        </table>
                        <div class="form-group mb-3"> 
                            <label for="">Marks</label>
                            <input type="text" name="f2" value="{{ $student->f2 }}" class="form-control">
                        </div>
                        <div class="float-right">
                        <div class="form-group mb-3">
                            <a href="{{ url('lecturer/forms/f2') }}" class="btn btn-danger float-end">Back</a> 
                            <button type="submit" class="btn btn-primary">Grade F2</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection