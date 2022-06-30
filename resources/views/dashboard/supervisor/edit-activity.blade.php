@extends('layouts.supervisor-main')
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
                    <h4 class="m-0 font-weight-bold text-primary">F5 - PROPOSAL/PROJECT IN-PROGRESS FORM</h4>            
                </div>
                <div class="card-body">
                    <form action="{{ url('/supervisor/update-activity/'.$activity->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <select class="form-control" name="signature" id="signature">
                                        <option value="Unsigned" selected='selected'>Unsigned</option>
                                        <option value="Signed">Signed</option>
                                    </select>
                                    </div>
                                </div>
                        </table>
                        <div class="float-right">
                        <div class="form-group mb-3"> 
                            <button type="submit" class="btn btn-primary">Sign</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection