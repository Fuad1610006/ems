@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <section class="section">
      <div class="row">
        <div class="col-md-12">

        <a href="{{route('employees.create')}}">
            <button type="button" class="btn btn-primary my-2">Add New</button>
        </a>

            <div class="card">
                <div class="card-body table-responsive">


                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Contact')}}</th>
                                <th scope="col">{{__('Present Address')}}</th>
                                <th scope="col">{{__('Permanent Address')}}</th>
                                <th scope="col">{{__('Date of Birth')}}</th>
                                <th scope="col">{{__('Joining Date')}}</th>
                                <th scope="col">{{__('NID No.')}}</th>
                                <th scope="col">{{__('Blood Group')}}</th>           
                                <th scope="col">{{__('Image')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                    </thead>
                    <tbody>
                            @forelse($employee as $e)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$e->name_en}}</td>
                                <td>{{$e->email}}</td>
                                <td>{{$e->contact_no_en}}</td>
                                <td>{{$e->present_address}}</td>
                                <td>{{$e->permanent_address}}</td>
                                <td>{{$e->date_of_birth}}</td>
                                <td>{{$e->joining_date}}</td>
                                <td>{{$e->nid_no}}</td>
                                <td>{{$e->blood_group}}</td>
                                <td><img width="50px" src="{{asset('public/uploads/employees/'.$e->image)}}" alt=""></td>
                                
                                <td class="white-space-nowrap">
                                    <a href="{{route('employees.edit',encryptor('encrypt',$e->id))}}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$e->id}}').submit()">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                    <form id="form{{$e->id}}" action="{{route('employees.destroy',encryptor('encrypt',$e->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="12" class="text-center">No Data Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
    </div>
</section>
@endsection
