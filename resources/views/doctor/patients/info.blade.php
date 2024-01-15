@extends('layouts.reception')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg profile-setting-img">
                <img src="{{asset('assets/images/auth-one-bg.jpg')}}" class="profile-wid-img" alt="">
                <div class="overlay-content">
                    <div class="text-end p-3">

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-3">
                <div class="card mt-n5">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                <img src="{{asset('assets/images/user.jpg')}}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                            </div>
                            <h5 class="mb-1">{{ $patient->first_name }} {{ $patient->last_name }}</h5>
                        </div>
                    </div>
                </div>
                <!--end card-->


            </div>
            <!--end col-->
            <div class="col-xxl-9">
                <div class="card mt-xxl-n5">
                    <div class="card-header">
                        <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                    <i class="fas fa-home"></i> Personal Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#lifestyle" role="tab">
                                    <i class="far fa-user"></i> Lifestyle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#medicalRecords" role="tab">
                                    <i class="far fa-envelope"></i> Medical Details
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="firstnameInput" class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="first_name" id="firstnameInput" value="{{ $patient->first_name }}" placeholder="Enter your firstname" readonly>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="lastnameInput" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="lastnameInput" placeholder="Enter your lastname" value=" {{ $patient->last_name }} ">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" name="phone" id="phonenumberInput"  value="{{ $patient->phone }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="emailInput" placeholder="Enter your email" value=" {{ $patient->email }} ">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="JoiningdatInput" class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control" data-provider="flatpickr" id="JoiningdatInput" data-date-format="d M, Y" placeholder="Select date" value=" {{$patient->dob}}"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="height" class="form-label">Height</label>
                                                <input type="text" class="form-control" name="height" id="height"  value="{{ $patient->height }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="weight" class="form-label">Weight</label>
                                                <input type="text" class="form-control" name="weight" id="weight"  value="{{ $patient->weight }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="weight" class="form-label">Education</label>
                                                <input type="text" class="form-control" name="education" id="education"  value="{{ $patient->education }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="height" class="form-label">Occupation</label>
                                                <input type="text" class="form-control" name="occupation" id="height"  value="{{ $patient->occupation }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="weight" class="form-label">Nationality</label>
                                                <input type="text" class="form-control" id="nationality"  value="{{ $patient->nationality }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="weight" class="form-label">Ethnicity</label>
                                                <input type="text" class="form-control" id="ethnicity"  value="{{ $patient->ethnicity }}" readonly>
                                            </div>
                                        </div>

                                        <!--end col-->
                                        <!--end col-->
                                    </div>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="lifestyle" role="tabpanel">
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="smoking" class="form-label">Smoking</label>
                                                <input type="text" class="form-control" value=" {{ $patient->patients->smoking }} " readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="tattoo" class="form-label">Tattoos</label>
                                                <input type="text" class="form-control" value=" {{ $patient->patients->tattoo }} " readonly>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="his_bleach" class="form-label">Skin Bleaching History</label>
                                                <input type="text" class="form-control" value=" {{ $patient->patients->his_bleach }} " readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="smoking" class="form-label">Diet</label>
                                                <input type="text" class="form-control" value=" {{ $patient->patients->diet }} " readonly>
                                            </div>
                                        </div>


                                    </div>
                                    <!--end row-->

                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="medicalRecords" role="tabpanel">
                                    <div id="newlink">
                                        <div id="1">
                                            <div class="row">
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Existing Medical condition</label>
                                                        <input type="text" class="form-control" id="basiInput" value="{{ $patient->medlife->existing_medical_condition}}" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="placeholderInput"
                                                            class="form-label">Personal History of Melanoma</label>
                                                        <input type="text" class="form-control" name="his_melanoma" value="{{$patient->medlife->his_melanoma}}" id="placeholderInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Family history of Melanoma</label>
                                                        <input type="text" class="form-control" name="fam_melanoma" value="{{$patient->medlife->fam_melanoma}}" id="valueInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="iconrightInput" class="form-label">Known Allergies</label>
                                                        <div class="form-icon right">
                                                            <input type="text" class="form-control" value="{{$patient->medlife->known_allergies}}" name="known_allergies"
                                                                id="iconrightInput" placeholder="" readonly  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Blood Group</label>
                                                        <input type="text" class="form-control" name="blood_group" value="{{$patient->medlife->blood_group}}" id="valueInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Lab Test results</label>
                                                        <input type="text" class="form-control" name="lab_test"  value="{{$patient->medlife->lab_test}}" id="valueInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Diagnosis</label>
                                                        <input type="text" class="form-control" name="diagnosis" value="{{$patient->medlife->diagnosis}}" id="valueInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    <!--end col-->
                            </div>
                            <!--end tab-pane-->

                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
    <!-- container-fluid -->
</div><!-- End Page-content -->
@endsection
