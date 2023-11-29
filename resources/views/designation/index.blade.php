@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Designations</h2>

        <a href="{{ route('designation.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($designation as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->designation }}</td>
                        <td>{{ $d->department->department }}</td>
                        <td>
                        <form action="{{ route('designation.destroy', encryptor('encrypt',$d->id)) }}" method="post">
                            <a href="{{ route('designation.edit', encryptor('encrypt',$d->id)) }}" class="btn btn-warning btn-sm">Edit</a>
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
