@extends('layouts.appAuth')
@section('title','Sign Up')
@section('content')

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{asset('public/assets/img/logo.png')}}" alt="">
                  <span class="d-none d-lg-block">EMS</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" action="{{route('register.store')}}" method="POST" >
                  @csrf
                    <div class="col-12">
                      <label for="FullName" class="form-label">Your Name</label>
                      <input type="text" name="FullName" class="form-control" id="FullName" value="{{old('FullName')}}" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                      @if($errors->has('FullName'))
														<small class="d-block text-danger">
															{{$errors->first('FullName')}}
														</small>
													@endif
                    </div>

                    <div class="col-12">
                      <label for="EmailAddress" class="form-label">Your Email</label>
                      <input type="email" name="EmailAddress" class="form-control" id="EmailAddress" value="{{old('EmailAddress')}}" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                      @if($errors->has('EmailAddress'))
														<small class="d-block text-danger">
															{{$errors->first('EmailAddress')}}
														</small>
													@endif
                    </div>

                    <div class="col-12">
                      <label for="contact_no_en" class="form-label">Contact Number</label>
                      <div class="input-group has-validation">
                        <input type="text" name="contact_no_en" class="form-control" id="contact_no_en" value="{{old('contact_no_en')}}" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                        @if($errors->has('contact_no_en'))
														<small class="d-block text-danger">
															{{$errors->first('contact_no_en')}}
														</small>
													@endif
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                      @if($errors->has('password'))
														<small class="d-block text-danger">
															{{$errors->first('password')}}
														</small>
													@endif
                    </div>

                    <div class="col-12">
                      <label for="password_confirmation" class="form-label"> Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                      <div class="invalid-feedback">Please re-enter your password!</div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>
@endsection('content')