@php
    use Carbon\Carbon;
@endphp
@extends('layouts.doctor')

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
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-camera-fill"></i>
                                        </span>
                                    </label>
                                </div>
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
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#appointments" role="tab">
                                    <i class="far fa-user"></i> Appointments
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#medicalRecords" role="tab">
                                    <i class="far fa-envelope"></i> Medical Details / Prescriptions
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                <form action="javascript:void(0);">
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
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="appointments" role="tabpanel">
                                <form action="javascript:void(0);">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Appointment List</h5>
                                                    <div class="flex-grow-1">
                                                        <a href="{{ route('reception-appointment-add') }}" class="btn btn-info add-btn" ><i class="ri-add-fill me-1 align-bottom"></i> Add Appointment</a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Patient</th>
                                                                <th>Doctor</th>
                                                                <th>Appointment Type</th>
                                                                <th>Purpose </th>
                                                                <th>Date</th>
                                                                <th>Time</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($appointments as $appoint)

                                                            <?php

                                                                    $carbonDate = \Carbon\Carbon::createFromTimestamp($appoint->timestamp);

                                                                    $date = $carbonDate->format('Y-m-d');
                                                                    $time = $carbonDate->format('H:i:s');

                            ?>
                                                            <tr>
                                                                <td>{{$appoint->patient->name ?? ''}}</td>
                                                                <td>{{$appoint->doctor->name ?? ''}}</td>
                                                                <td>{{$appoint->type}}</td>
                                                                <td>{{$appoint->message}}</td>
                                                                <td>{{$date}}</td>
                                                                <td>{{$time}}</td>
                                                            </tr>

                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="medicalRecords" role="tabpanel">
                                <form>
                                    <div id="newlink">
                                        <div id="1">
                                            <div class="row">
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="basiInput" class="form-label">Existing Medical condition</label>
                                                        <input type="text" class="form-control" id="basiInput" value="{{ $patient->existing_medical_condition ?? ''}}" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="placeholderInput"
                                                            class="form-label">Personal History of Melanoma</label>
                                                        <input type="text" class="form-control" name="his_melanoma" value="{{$patient->his_melanoma ?? ''}}" id="placeholderInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Family history of Melanoma</label>
                                                        <input type="text" class="form-control" name="fam_melanoma" value="{{$patient->fam_melanoma ?? ''}}" id="valueInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="iconrightInput" class="form-label">Known Allergies</label>
                                                        <div class="form-icon right">
                                                            <input type="text" class="form-control" value="{{$patient->known_allergies ?? ''}}" name="known_allergies"
                                                                id="iconrightInput" placeholder="" readonly  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Blood Group</label>
                                                        <input type="text" class="form-control" name="blood_group" value="{{$patient->blood_group ?? ''}}" id="valueInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Lab Test results</label>
                                                        <input type="text" class="form-control" name="lab_test"  value="{{$patient->lab_test ?? ''}}" id="valueInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="valueInput" class="form-label">Diagnosis</label>
                                                        <input type="text" class="form-control" name="diagnosis" value="{{$patient->diagnosis ?? ''}}" id="valueInput"
                                                            placeholder="" readonly  />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    <!--end col-->
                                </form>
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
