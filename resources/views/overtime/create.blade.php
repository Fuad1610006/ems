@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Overtime</h2>

        <form action="{{ route('overtime.store') }}" method="POST">
            @csrf
            <div class="form-group col-md-9 my-2">
                <label for="">Name:</label>
                <input type="text" class="form-control" id="" name="" required>
            </div>
            <div class="form-group col-md-9 my-2">
                <label for="department_id">Department:</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    @foreach($department as $d)
                        <option value="{{ $d->id }}">{{ $d->department }}</option>
                    @endforeach
                </select>
            </div>
             <div class="form-group col-md-9 my-2">
                <label for="department_id">Designation:</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    @foreach($department as $d)
                        <option value="{{ $d->id }}">{{ $d->department }}</option>
                    @endforeach
                </select>
            </div>
             <div class="form-group col-md-9 my-2">
                <label for="">Date:</label>
                <input type="date" class="form-control" id="" name="" required>
            </div>
             <div class="form-group col-md-9 my-2">
                <label for="">Hours:</label>
                <input type="text" class="form-control" id="" name="" required>
            </div>
            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
@endsection
