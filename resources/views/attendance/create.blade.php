@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Attendance</h2>

        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
           <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendance as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->employee->name_en }}</td>
                        <td>{{ $d->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            <button type="submit" class="btn btn-primary my-2">Save</button>
        </form>
    </div>
@endsection
