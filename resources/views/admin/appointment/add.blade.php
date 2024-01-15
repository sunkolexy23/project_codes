@extends('layouts.admin')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add New Medical Info</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Medical Information</a></li>
                            <li class="breadcrumb-item active">Medical Details</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Medical Details</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('medical-submit')}}" method="POST">
                        <div class="live-preview">
                            <div class="row gy-4">

                                    @csrf
                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Select Patient</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="patient_id" name="patient_id" required>
                                            @foreach ($patients as $patient)
                                                <option value="{{$patient->id}}">{{$patient->first_name}} {{$patient->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Select Department</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="department" name="department" required>
                                                <option value="Melanoma">Melanoma</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Select Doctor</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="doctor" name="doctor" required>
                                            @foreach ($users as $user)
                                                <option value="{{$user->name}}">Dr. {{$user->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Appointment Date</label>
                                        <input type="date" class="form-control" id="basiInput" name="date"
                                            placeholder="" required/>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Appointment Time</label>
                                        <input type="date" class="form-control" id="basiInput" name="time"
                                            placeholder="" required/>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="placeholderInput"
                                            class="form-label">Purpose</label>
                                        <input type="text" class="form-control" id="placeholderInput" name="purpose"
                                            placeholder="" required/>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Type of Visit</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="type" name="type" required>
                                                <option value="Checkup">Checkup</option>
                                        </select>
                                    </div>
                                </div>

                                <!--end col-->

                                <!--end col-->



                            <!--end col-->
                            </div>

                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            <!--end row-->
                        </div>

                    </form>

                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div> <!-- container-fluid -->
</div><!-- End Page-content -->

@endsection
