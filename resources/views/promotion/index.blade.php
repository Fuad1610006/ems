@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Promotion</h2>

        <a href="{{ route('promotion.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>From Department</th>
                    <th>From Designation</th>
                    <th>To Department</th>
                    <th>To Designation</th>
                    <th>Notice Date</th>
                    <th>Promotion Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promotion as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->employee->name_en }}</td>
                        <td>{{ optional($d->employee->department)->department ?? 'N/A' }}</td>
                        <td>{{ optional($d->employee->designation)->designation ?? 'N/A' }}</td>
                        <td>{{ optional($d->promotion)->to_department ?? 'N/A' }}</td>
                        <td>{{ optional($d->promotion)->to_designation ?? 'N/A' }}</td>
                        <td>{{ $d->notice_date }}</td>
                        <td>{{ $d->promotion_date }}</td>
                        <td>

                            <form action="{{ route('promotion.destroy',encryptor('encrypt',$d->id)) }}" method="post">
                            <a href="{{ route('promotion.edit', encryptor('encrypt',$d->id)) }}" class="btn btn-warning btn-sm">Edit</a>
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
