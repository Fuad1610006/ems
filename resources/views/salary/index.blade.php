@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <section class="section">
      <div class="row">
        <div class="col-md-12">
        <h2 class="my-0">Salary List</h2>

        <a href="{{route('salary.create')}}">
            <button type="button" class="btn btn-primary my-2">Add New</button>
        </a>

            <div class="card">
                <div class="card-body table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                           <th scope="col">{{__('#SL')}}</th>
                            <th scope="col">{{__('Name')}}</th>
                            <th scope="col">{{__('Basic Salary')}}</th>
                            <th scope="col">{{__('House Rent')}}</th>
                            <th scope="col">{{__('Medical Allowance')}}</th>
                            <th scope="col">{{__('Travel Allowance')}}</th>
                            <th scope="col">{{__('Dearness Allowance')}}</th>
                            <th scope="col">{{__('Overtime Amount')}}</th>
                            <th scope="col">{{__('Bonus')}}</th>
                            <th scope="col">{{__('Tax')}}</th> 
                            <th scope="col">{{__('Provident Fund')}}</th> 
                            <th scope="col">{{__('Leave Deduction')}}</th> 
                            <th scope="col">{{__('Total')}}</th> 
                            <th class="white-space-nowrap">{{__('Action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                            @forelse($salary as $e)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$e->employee->name_en}}</td>
                                <td>{{$e->basic_salary}}</td>
                                <td>{{$e->house_rent}}</td>
                                <td>{{$e->medical_allowance}}</td>
                                <td>{{$e->travel_allowance}}</td>
                                <td>{{$e->dearness_allowance}}</td>                     
                                <td>{{$e->overtime_amount}}</td>
                                <td>{{$e->bonus}}</td>
                                <td>{{$e->tax}}</td> 
                                <td>{{$e->provident_fund}}</td> 
                                <td>{{$e->leave_deduction}}</td> 
                                <td>{{$e->salary}}</td> 
                                
                                <td class="white-space-nowrap">
                                   <a class="d-inline"  href="{{route('salary.show',encryptor('encrypt',$e->id))}}">
                                      <i class="fa fa-eye"></i>
                                    </a>
                                <form class="d-inline" action="{{route('salary.destroy',encryptor('encrypt',$e->id))}}" method="post">
                                         @csrf
                                        @method('delete')
                                 <i class="fa fa-trash"></i>
                                </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="14" class="text-center">No Data Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                </table>
                </div>
            </div>

            </div>
    </div>
</section>
@endsection
