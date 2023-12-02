@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Shifts</h2>

        <a href="{{ route('shift.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shift as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->shift }}</td>
                        <td>{{ $d->start_time }}</td>
                        <td>{{ $d->end_time }}</td>
                        <td>

                            <form action="{{ route('shift.destroy',encryptor('encrypt',$d->id)) }}" method="post">
                            <a href="{{ route('shift.edit', encryptor('encrypt',$d->id)) }}" class="btn btn-warning btn-sm">Edit</a>
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
