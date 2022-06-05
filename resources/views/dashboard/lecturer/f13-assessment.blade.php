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
                    <a href="{{ url('lecturer/forms/f13') }}" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('/lecturer/update-f13/'.$student->id) }}" method="POST">
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
                            $criteria2 = 1;
                            $criteria3 = 1;
                            $criteria4 = 1;
                            $criteria5 = 1;
                            $criteria6 = 1;
                            $criteria7 = 1;
                            $criteria8 = 1;
                            $criteria9 = 1;
                        @endphp
                        <table class="table table-bordered">
                            <tr>
                                <th>Assessment Criteria</th>
                                <th>Weight</th>
                            </tr>
                            <tr>
                                <td>1. Problem</td>
                                <td>{{ $criteria1 }}</td>
                            </tr>
                            <tr>
                                <td>2. Solution</td>
                                <td>{{ $criteria2 }}</td>
                            </tr>
                            <tr>
                                <td>3. Key Metrics</td>
                                <td>{{ $criteria3 }}</td>
                            </tr>
                            <tr>
                                <td>4. Unique Value Proposition</td>
                                <td>{{ $criteria4 }}</td>
                            </tr>
                            <tr>
                                <td>5. Unfair Advantage</td>
                                <td>{{ $criteria5 }}</td>
                            </tr>
                            <tr>
                                <td>6. Channels</td>
                                <td>{{ $criteria6 }}</td>
                            </tr>
                            <tr>
                                <td>7. Customer Segments</td>
                                <td>{{ $criteria7 }}</td>
                            </tr>
                            <tr>
                                <td>8. Cost Structure</td>
                                <td>{{ $criteria8 }}</td>
                            </tr>
                            <tr>
                                <td>9. Revenue Streams</td>
                                <td>{{ $criteria9 }}</td>
                            </tr>

                        </table>
                        
                        <div class="form-group mb-3">
                            <label for="">Marks</label>
                            <input type="text" name="f13" value="{{$student->f13}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Grade F13</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection