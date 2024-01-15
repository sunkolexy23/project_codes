@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admin')

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
                            <h5 class="mb-1">{{ $patient->name }}</h5>
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
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="firstnameInput" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" id="firstnameInput" value="{{ $patient->name }}" placeholder="Enter your firstname" readonly>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" name="phone" id="phonenumberInput"  value="{{ $patient->phone }}" readonly>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="emailInput" placeholder="Enter your email" value=" {{ $patient->email }} " readonly>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="JoiningdatInput" class="form-label">Date of Birth</label>
                                                <input type="text" class="form-control" name="dob" id="emailInput" placeholder="Enter your email" value=" {{ $patient->birth_date }} ">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="sex" class="form-label">Age</label>
                                                <input type="text" class="form-control" name="sex" id="sex"  value="{{Carbon::parse($patient->birth_date)->age}}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="sex" class="form-label">Sex</label>
                                                <input type="text" class="form-control" name="sex" id="sex"  value="{{ $patient->sex }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="blood_group" class="form-label">Blood Group</label>
                                                <input type="text" class="form-control" name="blood_group" id="blood_group"  value="{{ $patient->blood_group }}" readonly>
                                            </div>
                                        </div>



                                        <!--end col-->
                                        <!--end col-->
                                    </div>
                            </div>
                            <!--end tab-pane-->

                            <!--end tab-pane-->

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
