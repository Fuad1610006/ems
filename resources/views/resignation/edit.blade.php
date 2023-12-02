@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Resignation</h2>

        <form action="{{ route('resignation.update', encryptor('encrypt',$resignation->id)) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="shift">Name:</label>
                <input type="text" class="form-control" id="shift" name="shift" value="{{ $shift->shift }}" required>
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
                <label for="notice_date">Notice Date</label>
                <input type="date" class="form-control" id="notice_date" name="notice_date" required>
            </div>
             <div class="form-group col-md-8">
                <label for="resignation_date">Resignation Date</label>
                <input type="date" class="form-control" id="resignation_date" name="resignation_date" required>
            </div>
            <button type="submit" class="btn btn-primary my-2">Update</button>
        </form>
    </div>
@endsection
