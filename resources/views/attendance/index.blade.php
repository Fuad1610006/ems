@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Attendance</h2>

        <a href="{{ route('attendance.create') }}" class="btn btn-primary mb-3">Add New</a>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Attendance Date')}}</th>
                                <th scope="col">{{__('Present')}}</th>
                                <th scope="col">{{__('Absent')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                          @forelse($attendance as $t)
                                    <tr role="row" class="odd">
                                        <td>{{++$loop->index}}</td>
                                        <td>{{$t->date}}</td>
                                        <td>{{$t->present}}</td>
                                        <td>{{$t->absent}}</td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('attendance.show') }}"><i class="fas fa-eye"></i></a>

                                            </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty

                                    <tr>
                                        <th colspan="5" class="text-center">Data not found</th>
                                    </tr>
                                @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
