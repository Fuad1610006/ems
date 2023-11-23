@extends('layouts.app')

@section('content')

<!-- Bordered table start -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <!-- table bordered -->
            <div class="table-responsive"><div>
                <a class="pull-right fs-1" href="{{route('role.create')}}"><i class="fa fa-plus"></i></a>
            </div>
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th scope="col">{{__('#SL')}}</th>
                            <th scope="col">{{__('Type')}}</th>
                            <th scope="col">{{__('Name')}}</th>
                            <th class="white-space-nowrap">{{__('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $p)
                        <tr>
                            <th scope="row">{{ ++$loop->index }}</th>
                            <td>{{$p->type}}</td>
                            <td>{{$p->identity}}</td>
                            <td class="white-space-nowrap">
                                <a href="{{route('role.edit',encryptor('encrypt',$p->id))}}">
                                <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="{{route('permission.list',encryptor('encrypt',$p->id))}}">
                                <i class="bi bi-shield-lock-fill"></i>
                                </a>
                                <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                <i class="bi bi-trash"></i>
                                </a>
                                <form id="form{{$p->id}}" action="{{route('role.destroy',encryptor('encrypt',$p->id))}}" method="post">
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
            </div>
        </div>
    </div>
</div>
@endsection
