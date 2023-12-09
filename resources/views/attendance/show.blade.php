@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Employee Attendance</h2>
          <h4>Date: {{$date}}</h4>

        <div class="card">      
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Employee')}}</th>
                                <th scope="col">{{__('Status')}}</th>
                                <th scope="col">{{__('Update')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                          @forelse($attendance as $t)
                                    <tr role="row" class="odd">
                                        <td>{{++$loop->index}}</td>
                                        <td>{{ $t->employee?->name_en }}
                                        </td>
                                        <td>
                                            {{($t->status==1?'Present':'Absent')}}
                                        </td>
                                        <td>
                                            <a href="{{route('attendance.singleEdit',encryptor('encrypt',$t->id))}}" class=""><i class="fas fa-edit"></i>
                                        </td>
                                    </tr>
                                @empty

                                    <tr>
                                        <th colspan="4" class="text-center">Data not found</th>
                                    </tr>
                                @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
