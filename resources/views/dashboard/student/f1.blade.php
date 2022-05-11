@extends('layouts.student-main')
@section('content')
    <div class="container-fluid">
        <br>
        <form action="#" method="post" class="p-3 bg-light border">
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputID" class="col-sm-2 col-form-label">Student ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputID" placeholder="Student ID" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputProgram" class="col-sm-2 col-form-label">Program</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputProgram" placeholder="Program" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSupervisor" class="col-sm-2 col-form-label">Supervisor Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSupervisor" placeholder="Supervisor Name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputProject" class="col-sm-2 col-form-label">Project Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputProject" placeholder="Project Title" required>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">F1</h2>
            </div>
            <br>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Assessment Criteria</th>
                                <th>Description</th>
                                <th>Weight</th>
                                <th>Score</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Problem Identification</td>
                                <td>Identify Problem</td>
                                <td>3</td>
                                <td><input type="text" class="form control small" disabled></td>
                                <td></td>
                                
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Evidence</td>
                                <td>Evidences to support problem identified</td>
                                <td>5</td>
                                <td><input type="text" class="form control small" disabled></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Solution</td>
                                <td>Propose Solution</td>
                                <td>2</td>
                                <td><input type="text" class="form control small" disabled></td>
                                <td></td>
                            </tr>                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
