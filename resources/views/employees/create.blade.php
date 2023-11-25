@extends('layouts.app')

@section('content')
  <!-- // Basic multiple Column Form section start -->
  <h2>Employee Info </h2>
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body mt-4">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('employees.store')}}">
                                @csrf
                                <div class="row">
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="userName_en">Name (English) <i class="text-danger">*</i></label>
                                            <input type="text" id="userName_en" class="form-control" value="{{ old('userName_en')}}" name="userName_en">
                                            @if($errors->has('userName_en'))
                                                <span class="text-danger"> {{ $errors->first('userName_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                   

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                            <input type="text" id="EmailAddress" class="form-control" value="{{ old('EmailAddress')}}" name="EmailAddress">
                                            @if($errors->has('EmailAddress'))
                                                <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="contactNumber_en">Contact Number<i class="text-danger">*</i></label>
                                            <input type="text" id="contactNumber_en" class="form-control" value="{{ old('contactNumber_en')}}" name="contactNumber_en">
                                            @if($errors->has('contactNumber_en'))
                                                <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="present_address">Present Address</label>
                                            <input type="text" id="present_address" class="form-control"  name="present_address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="permanent_address">Permanent Address</label>
                                            <input type="text" id="permanent_address" class="form-control"  name="permanent_address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="joining_date">Joining Date</label>
                                            <input type="date" id="joining_date" class="form-control" name="joining_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input type="date" id="date_of_birth" class="form-control"  name="date_of_birth">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="blood_group">Blood Group</label>
                                            <input type="text" id="blood_group" class="form-control"  name="blood_group">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nid_no">NID No:</label>
                                            <input type="text" id="nid_no" class="form-control" name="nid_no">
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
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="password">Password <i class="text-danger">*</i></label>
                                            <input type="password" id="password" class="form-control" name="password">
                                                @if($errors->has('password'))
                                                    <span class="text-danger"> {{ $errors->first('password') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary px-5 mt-3">Save</button>

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
