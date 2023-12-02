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
                    <th>Department</th>
                    <th>Designation</th>
                    <th>New Designation</th>
                    <th>Notice Date</th>
                    <th>Promotion Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promotion as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->employee->name }}</td>
                        <td>{{ $d->department->department_id }}</td>
                        <td>{{ $d->designation->designation_id }}</td>
                        <td>{{ $d->designation->new_designation_id }}</td>
                        <td>{{ $d-> notice_date }}</td>
                        <td>{{ $d-> promotion_date }}</td>
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
