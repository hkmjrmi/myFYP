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
                    <h4 class="m-0 font-weight-bold text-primary">F13 - LEAN CANVAS MODEL EVALUATION FORM</h4>
                </div>
                <div class="card-body">
                    <form name="calculator" action="{{ url('/lecturer/update-f13/'.$student->id) }}" method="POST">
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
                                <td>1. Problem</td>
                                <td><input type="text" name="weight1" value="2" disabled></td>
                                <td><input type="text" name="score1"></td>
                                <td><input type="text" name="marks1" disabled></td>
                            </tr>
                            <tr>
                                <td>2. Solution</td>
                                <td><input type="text" name="weight2" value="1" disabled></td>
                                <td><input type="text" name="score2"></td>
                                <td><input type="text" name="marks2" disabled></td>
                            </tr>
                            <tr>
                                <td>3. Key Metrics</td>
                                <td><input type="text" name="weight3" value="1" disabled></td>
                                <td><input type="text" name="score3"></td>
                                <td><input type="text" name="marks3" disabled></td>
                            </tr>
                            <tr>
                                <td>4. Unique Value Proposition</td>
                                <td><input type="text" name="weight4" value="1" disabled></td>
                                <td><input type="text" name="score4"></td>
                                <td><input type="text" name="marks4" disabled></td>
                            </tr>
                            <tr>
                                <td>5. Unfair Advantage</td>
                                <td><input type="text" name="weight5" value="1" disabled></td>
                                <td><input type="text" name="score5"></td>
                                <td><input type="text" name="marks5" disabled></td>
                            </tr>
                            <tr>
                                <td>6. Channels</td>
                                <td><input type="text" name="weight6" value="1" disabled></td>
                                <td><input type="text" name="score6"></td>
                                <td><input type="text" name="marks6" disabled></td>
                            </tr>
                            <tr>
                                <td>7. Customer Segments</td>
                                <td><input type="text" name="weight7" value="1" disabled></td>
                                <td><input type="text" name="score7"></td>
                                <td><input type="text" name="marks7" disabled></td>
                            </tr>
                            <tr>
                                <td>8. Cost Structure</td>
                                <td><input type="text" name="weight8" value="1" disabled></td>
                                <td><input type="text" name="score8"></td>
                                <td><input type="text" name="marks8" disabled></td>
                            </tr>
                            <tr>
                                <td>9. Revenue Streams</td>
                                <td><input type="text" name="weight9" value="1" disabled></td>
                                <td><input type="text" name="score9"></td>
                                <td><input type="text" name="marks9" disabled></td>
                            </tr>
                            <tr>
                                <td colspan="2">Total</td>
                                <td><input type="button" value="Compute" class="btn btn-success" onclick="javascript:computef13();"></td>
                                <td><input type="text" name="total" disabled></td>
                            </tr>
                        </table>
                        <div class="form-group mb-3">
                            <label for="">Marks</label>
                            <input type="text" name="f13" value="{{$student->f13}}" class="form-control">
                        </div>
                        <div class="float-right">
                            <div class="form-group mb-3">
                                <a href="{{ url('lecturer/forms/f13') }}" class="btn btn-danger float-end">Back</a> 
                                <button type="submit" class="btn btn-primary">Grade F13</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection