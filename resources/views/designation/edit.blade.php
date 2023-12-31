@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Designation</h2>

        <form action="{{ route('designation.update', encryptor('encrypt',$designation->id)) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="designation">Name:</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{ $designation->designation }}" required>
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
            <button type="submit" class="btn btn-primary my-2">Update</button>
        </form>
    </div>
@endsection
