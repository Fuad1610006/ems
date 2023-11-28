@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Department</h2>

        <form action="{{ route('department.store') }}" method="POST">
            @csrf
            <div class="form-group col-md-8">
                <label for="department">Name:</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
@endsection
