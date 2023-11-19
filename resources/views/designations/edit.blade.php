@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Designation</h2>

        <form action="{{ route('designations.update', $designation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="designation">Name:</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{ $d->designation }}" required>
            </div>
            <div class="form-group">
                <label for="department_id">Department:</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    @foreach($departments as $d)
                        <option value="{{ $d->id }}" {{ $d->id == $d->department_id ? 'selected' : '' }}>{{ $d->department }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
