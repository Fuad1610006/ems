@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Termination</h2>

        <a href="{{ route('termination.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                   {{-- <th>Type</th>--}}
                    <th>Reason</th>
                    <th>Notice Date</th>
                    <th>Termination Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($termination as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->employee->name_en}}</td>
                        <td>{{ $d->employee->department ? $d->employee->department->department : 'N/A' }}</td>
                        <td>{{ $d->employee->designation ? $d->employee->designation->designation : 'N/A' }}</td>
                        {{--<td>{{ $d->type }}</td>--}}
                        <td>{{ $d->reason }}</td>
                        <td>{{ $d->notice_date}}</td>
                        <td>{{ $d->termination_date }}</td>
                        <td>

                            <form action="{{ route('termination.destroy',encryptor('encrypt',$d->id)) }}" method="post">
                            <a href="{{ route('termination.edit', encryptor('encrypt',$d->id)) }}" class="btn btn-warning btn-sm">Edit</a>
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
