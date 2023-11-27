@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Attendance</h2>

        <a href="{{ route('attendance.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendance as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->employee->name_en }}</td>
                        <td>{{ $d->status }}</td>
                        <td>                          
                           
                            <form action="{{ route('attendance.destroy', $d->id) }}" method="post">
                            <a href="{{ route('attendance.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
