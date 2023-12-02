@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Termination</h2>

        <form action="{{ route('termination.store') }}" method="POST">
            @csrf
            <div class="form-group col-md-8">
                <label for="shift">Name:</label>
                <input type="text" class="form-control" id="shift" name="shift" required>
            </div>
             <div class="form-group col-md-8">
                <label for="department_id">Department</label>
                <input type="text" class="form-control" id="department_id" name="department_id" required>
            </div>
             <div class="form-group col-md-8">
                <label for="designation_id">Designation</label>
                <input type="text" class="form-control" id="designation_id" name="designation_id" required>
            </div>
            <div class="form-group col-md-8">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <div class="form-group col-md-8">
                <label for="reason">Reason</label>
                <textarea class="form-control"  id="reason" name="reason">
                </textarea>
            </div>
             <div class="form-group col-md-8">
                <label for="notice_date">Notice Date</label>
                <input type="date" class="form-control" id="notice_date" name="notice_date" required>
            </div>
             <div class="form-group col-md-8">
                <label for="termination_date">Termination Date</label>
                <input type="date" class="form-control" id="termination_date" name="termination_date" required>
            </div>
            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
@endsection
