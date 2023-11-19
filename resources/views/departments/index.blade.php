@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Departments</h2>

        <a href="{{ route('departments.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->department }}</td>
                        <td>                          
                           
                            <form action="{{ route('departments.destroy', $d->id) }}" method="post">
                            <a href="{{ route('departments.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
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
