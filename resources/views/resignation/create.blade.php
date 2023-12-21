@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Resignation</h2>
        <?php
         $employeeId = session('employeeId') ? encryptor(decrypt(session('employeeId'))) : null;
        ?>
       <form action="{{ route('resignation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="employee_id" value="{{ $employeeId }}">
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
                <label for="resignation_date">Resignation Date</label>
                <input type="date" class="form-control" id="resignation_date" name="resignation_date" required>
            </div>
            <div class="form-group col-md-8">
                <label for="application_file">Upload Application</label>
                <input type="file" class="form-control" id="application_file" name="application_file" required>
            </div>

            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
@endsection
