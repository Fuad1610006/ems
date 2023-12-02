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
                                <th scope="col">{{__('Role')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Status')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                    </thead>
                    <tbody>
                            @forelse($user as $e)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$e->name_en}}</td>
                                <td>{{$e->email}}</td>
                                <td>{{$e->contact_no_en}}</td>

                                <td>{{$e->role?->name}}</td>
                                <td><img width="50px" src="{{asset('public/uploads/employees/'.$e->image)}}" alt=""></td>
                                <td>@if($e->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td>
                                 <!-- <td>{{ $e->status == 1?"Active":"Inactive" }}</td>  -->
                                <td class="white-space-nowrap">
                                    <a href="{{route('user.edit',encryptor('encrypt',$e->id))}}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$e->id}}').submit()">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                    <form id="form{{$e->id}}" action="{{route('user.destroy',encryptor('encrypt',$e->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No Data Found</th>
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
