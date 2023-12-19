@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Overtime</h2>

        <a href="{{ route('overtime.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Date</th>
                    <th>Hours</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($overtime as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->employee->name_en }}</td>
                        <td>{{ $d->employee->department ? $d->employee->department->department : 'N/A' }}</td>
                        <td>{{ $d->employee->designation ? $d->employee->designation->designation : 'N/A' }}</td>
                        <td>{{ $d->date }}</td>
                        <td>{{ $d->hours }}</td>
                        <td>
                        <form action="{{ route('overtime.destroy', encryptor('encrypt',$d->id)) }}" method="post">
                            <a href="{{ route('overtime.edit', encryptor('encrypt',$d->id)) }}" class="btn btn-warning btn-sm">Edit</a>
                                @csrf
                                @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('content')
