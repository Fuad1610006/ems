@extends('layouts.app')

@section('content')
 
<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div>

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <h2>Kevin Anderson</h2>
          <h3>Web Designer</h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">About</h5>
              <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8">Kevin Anderson</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Company</div>
                <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Job</div>
                <div class="col-lg-9 col-md-8">Web Designer</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Country</div>
                <div class="col-lg-9 col-md-8">USA</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Address</div>
                <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Phone</div>
                <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form>
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="name_en" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="name_en" type="text" class="form-control" id="name_en" value="{{ old('name_en')}}">
                  </div>
                </div>

               <div class="row mb-3">
                  <label for="email" class="col-md-4 col-lg-3 col-form-label"> Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="text" class="form-control" id="email" value="{{ old('email')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="contact_no_en " class="col-md-4 col-lg-3 col-form-label">Contact No</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="contact_no_en " type="text" class="form-control" id="contact_no_en " value="{{ old('contact_no_en')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="date_of_birth" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="date_of_birth" type="text" class="form-control" id="date_of_birth" value="{{ old('date_of_birth')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="nid_no" class="col-md-4 col-lg-3 col-form-label">NID No</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="nid_no" type="text" class="form-control" id="nid_no" value="{{ old('nid_no')}}">
                  </div>
                </div>

                <div class="row mb-3">
                      <div class="form-group">
                          <label for="blood_group" class="col-md-4 col-lg-3 col-form-label">Blood Group</label>
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

              {{-- <div class="row mb-3">
                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                <div class="col-md-8 col-lg-9">
                  <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                <div class="col-md-8 col-lg-9">
                  <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                <div class="col-md-8 col-lg-9">
                  <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                </div>
              </div>
--}}
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
              <form>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="changesMade" checked>
                      <label class="form-check-label" for="changesMade">
                        Changes made to your account
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="newProducts" checked>
                      <label class="form-check-label" for="newProducts">
                        Information on new products and services
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="proOffers">
                      <label class="form-check-label" for="proOffers">
                        Marketing and promo offers
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                      <label class="form-check-label" for="securityNotify">
                        Security alerts
                      </label>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End settings Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form>

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="password" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>
@endsection