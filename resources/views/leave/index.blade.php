@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Leave</h2>

        <a href="{{ route('leave.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Leave Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>No. of Days</th>
                    <th>Remaining Leaves</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leave as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                      <td>{{ optional($d->employee)->name_en ?? 'N/A' }}</td>
                         <td>{{ $d->leave_type }}</td>
                        <td>{{ $d->start_date }}</td>
                        <td>{{ $d->end_date }}</td>
                        <td>{{ $d->no_of_days }}</td>
                        <td></td>
                        <td>{{ $d->reason }}</td>
                        <td>{{ $d->status }}</td>
                        <td>                          
                           
                            <form action="{{ route('leave.destroy', $d->id) }}" method="post">
                            <a href="{{ route('leave.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
