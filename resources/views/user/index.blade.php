@extends('layouts.app')

@section('content')

<div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">User List</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-md-12">

        <a href="{{route('user.create')}}">
            <button type="button" class="btn btn-primary">Add New</button>
        </a>

            <div class="card">
                <div class="card-body">
                   
               
                <!-- Table with stripped rows -->
                <table class="table table-striped table-responsive">
                    <thead>
                    <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Contact')}}</th>
                                <th scope="col">{{__('Role')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Status')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                    </thead>
                    <tbody>
                            @forelse($data as $p)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->name_en}}</td>
                                <td>{{$p->email}}</td>
                                <td>{{$p->contact_no_en}}</td>
                                <td>{{$p->role?->type}}</td>
                                <td><img width="50px" src="{{asset('public/uploads/users/'.$p->image)}}" alt=""></td>
                                <td>@if($p->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td>
                                <!-- or <td>{{ $p->status == 1?"Active":"Inactive" }}</td>-->
                                <td class="white-space-nowrap">
                                    <a href="{{route('user.edit',encryptor('encrypt',$p->id))}}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                    <form id="form{{$p->id}}" action="{{route('user.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No Pruduct Found</th>
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