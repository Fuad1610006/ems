@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Designation</h2>

        <form action="{{ route('designation.store') }}" method="POST">
            @csrf
            <div class="form-group col-md-9 my-2">
                <label for="designation">Name:</label>
                <input type="text" class="form-control" id="designation" name="designation" required>
            </div>
            <div class="form-group col-md-9 my-2">
                <label for="department_id">Department:</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    @foreach($department as $d)
                        <option value="{{ $d->id }}">{{ $d->department }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
@endsection
