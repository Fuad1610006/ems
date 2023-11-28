@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Department</h2>

        <form action="{{ route('department.update', $department->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="department">Name:</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ $department->department }}" required>
            </div>
            <button type="submit" class="btn btn-primary my-2">Update</button>
        </form>
    </div>
@endsection
