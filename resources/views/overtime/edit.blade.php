@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Overtime</h2>

        <form action="{{ route('overtime.update', encryptor('encrypt',$overtime->id)) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" id="" name="" value="" required>
            </div>
            <div class="form-group">
                <label for="department_id">Department:</label>
                <select class="form-control" id="department_id" name="department_id" required>
                      <option value="">Select Department</option>
                    @foreach($department as $d)
                        <option value="{{ $d->id }}" {{ $d->id == $d->department_id ? 'selected' : '' }}>{{ $d->department }}</option>
                    @endforeach
                </select>
            </div>
             <div class="form-group col-md-9 my-2">
                <label for="designation_id">Designation:</label>
                <select class="form-control" id="designation_id" name="designation_id" required>
                      <option value="">Select Designation</option>
                    @foreach($department as $d)
                        <option value="{{ $d->id }}">{{ $d->designation }}</option>
                    @endforeach
                </select>
            </div>
             <div class="form-group col-md-9 my-2">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
             <div class="form-group col-md-9 my-2">
                <label for="hours">Hours:</label>
                <input type="text" class="form-control" id="hours" name="hours" required>
            </div>
            <button type="submit" class="btn btn-primary my-2">Update</button>
        </form>
    </div>
@endsection
