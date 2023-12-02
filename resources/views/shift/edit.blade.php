@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Shift</h2>

        <form action="{{ route('shift.update', encryptor('encrypt',$shift->id)) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="shift">Name:</label>
                <input type="text" class="form-control" id="shift" name="shift" value="{{ $shift->shift }}" required>
            </div>
            <div class="form-group col-md-8">
                <label for="start_time">Start Time</label>
                <input type="time" class="form-control" id="start_time" name="start_time" required>
            </div>
             <div class="form-group col-md-8">
                <label for="end_time">End Time</label>
                <input type="time" class="form-control" id="end_time" name="end_time" required>
            </div>
            <button type="submit" class="btn btn-primary my-2">Update</button>
        </form>
    </div>
@endsection
