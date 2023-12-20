@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Leave</h2>

        <form action="{{ route('leave.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
           <input type="hidden" name="employee_id" value="{{ $currentUserId }}">
            <div class="form-group col-md-8">
            <label for="leave_type">Type</label>
            <select class="form-control" id="leave_type" name="leave_type" required>
                <option value="1" selected>Casual leave</option>
                <option value="2">Sick leave</option>
                <option value="3">Maternity leave</option>
            </select>
        </div>

            <div class="form-group col-md-8">
                <label for="reason">Reason</label>
                <textarea class="form-control"  id="reason" name="reason">
                </textarea>
            </div>

             <div class="form-group col-md-8">
                <label for="no_of_days">No. of Days</label>
                <input type="text" class="form-control" id="no_of_days" name="no_of_days">
            </div>

             <div class="form-group col-md-8">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>

             <div class="form-group col-md-8">
                <label for="end_date">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" required>
            </div>

            <div class="form-group col-md-8">
                <label for="application_file">Upload Application</label>
                <input type="file" class="form-control" id="application_file" name="application_file" required>
            </div>

            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
@endsection
