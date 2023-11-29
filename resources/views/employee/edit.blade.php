@extends('layouts.app')

@section('content')
<!-- // Basic multiple Column Form section start -->
<h2>Edit Employee Info</h2>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route('employee.update', encryptor('encrypt', $employee->id))}}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$employee->id)}}">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="roleId">Role <i class="text-danger">*</i></label>
                                        <select class="form-control" name="roleId" id="roleId">
                                            <option value="">Select Role</option>
                                            @forelse($role as $r)
                                            <option value="{{$r->id}}" {{ old('roleId',$employee->role_id)==$r->id?"selected":""}}> {{ $r->name}}</option>
                                            @empty
                                            <option value="">No Role found</option>
                                            @endforelse
                                        </select>
                                        @if($errors->has('roleId'))
                                        <span class="text-danger"> {{ $errors->first('roleId') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="roleId">Department <i class="text-danger">*</i></label>
                                        <select class="form-control" name="department_id" id="department_id">
                                            <option value="">Select Department</option>
                                            @forelse($department as $d)
                                            <option value="{{$d->id}}" {{ old('department_id')==$d->id?"selected":""}}> {{ $d->department}}</option>
                                            @empty
                                            <option value="">No Data found</option>
                                            @endforelse
                                        </select>
                                        @if($errors->has('department_id'))
                                        <span class="text-danger"> {{ $errors->first('department_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="roleId">Designation <i class="text-danger">*</i></label>
                                        <select class="form-control" name="designation_id" id="designation_id">
                                            <option value="">Select Designation</option>
                                            @forelse($designation as $d)
                                            <option value="{{$d->id}}" {{ old('designation_id')==$d->id?"selected":""}}> {{ $d->designation}}</option>
                                            @empty
                                            <option value="">No Data found</option>
                                            @endforelse
                                        </select>
                                        @if($errors->has('designation_id'))
                                        <span class="text-danger"> {{ $errors->first('designation_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name_en">Name <i class="text-danger">*</i></label>
                                        <input type="text" id="name_en" class="form-control" value="{{ old('name_en',$employee->name_en)}}" name="name_en">
                                        @if($errors->has('name_en'))
                                        <span class="text-danger"> {{ $errors->first('name_en') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                        <input type="text" id="EmailAddress" class="form-control" value="{{ old('EmailAddress',$employee->email)}}" name="EmailAddress">
                                        @if($errors->has('EmailAddress'))
                                        <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="contactNumber_en">Contact Number <i class="text-danger">*</i></label>
                                        <input type="text" id="contactNumber_en" class="form-control" value="{{ old('contactNumber_en',$employee->contact_no_en)}}" name="contactNumber_en">
                                        @if($errors->has('contactNumber_en'))
                                        <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="present_address">Present Address</label>
                                        <input type="text" id="present_address" class="form-control" name="present_address" value="{{ old('present_address',$employee->present_address)}}">
                                        @if($errors->has('present_address'))
                                        <span class="text-danger"> {{ $errors->first('present_address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="permanent_address">Permanent Address</label>
                                        <input type="text" id="permanent_address" class="form-control" name="permanent_address" value="{{ old('permanent_address',$employee->permanent_address)}}">
                                        @if($errors->has('permanent_address'))
                                        <span class="text-danger"> {{ $errors->first('permanent_address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="joining_date">Joining Date</label>
                                        <input type="date" id="joining_date" class="form-control" name="joining_date" value="{{ old('joining_date',$employee->joining_date)}}">
                                        @if($errors->has('joining_date'))
                                        <span class="text-danger"> {{ $errors->first('joining_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" value="{{ old('date_of_birth',$employee->date_of_birth)}}">
                                        @if($errors->has('date_of_birth'))
                                        <span class="text-danger"> {{ $errors->first('date_of_birth') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="blood_group">Blood Group</label>
                                        <select id="blood_group" class="form-control" name="blood_group">
                                            <option value="">Select Blood Group</option>
                                            <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                                            <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                                            <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                                            <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                                            <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                            <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                            <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                                            <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                                            <option value="unknown" {{ old('blood_group') == 'unknown' ? 'selected' : '' }}>Unknown</option>
                                        </select>
                                        @if($errors->has('blood_group'))
                                        <span class="text-danger"> {{ $errors->first('blood_group') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nid_no">NID No:</label>
                                        <input type="text" id="nid_no" class="form-control" name="nid_no" value="{{ old('nid_no',$employee->nid_no)}}">
                                    </div>
                                    @if($errors->has('nid_no'))
                                    <span class="text-danger"> {{ $errors->first('nid_no') }}</span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="password">Password <i class="text-danger">*</i></label>
                                            <input type="password" id="password" class="form-control" name="password">
                                            @if($errors->has('password'))
                                            <span class="text-danger"> {{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" id="image" class="form-control" placeholder="Image" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary  my-2">Save</button>

                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
