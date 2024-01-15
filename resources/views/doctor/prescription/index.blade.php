@extends('layouts.doctor')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Prescription</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Prescription</a></li>
                            <li class="breadcrumb-item active">Prescription List</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Prescription List</h5>
                        <div class="flex-grow-1">
                            <a href="{{ route('doctor-prescription-add') }}" class="btn btn-info add-btn" ><i class="ri-add-fill me-1 align-bottom"></i> Add Prescription</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prescriptions as $prescrip)

                                <?php

                                        $carbonDate = \Carbon\Carbon::createFromTimestamp($prescrip->timestamp);

                                        $date = $carbonDate->format('Y-m-d');
                                        $time = $carbonDate->format('H:i:s');
                                        ?>

                                <tr>
                                    <td>{{$prescrip->patient->name}}</td>
                                    <td>{{$prescrip->doctor->name}}</td>
                                    <td>{{$date}}</td>
                                    <td>{{$time}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary create-btn" data-bs-toggle="modal" data-bs-target="#view-prescription-{{$prescrip->id}}"><i class="ri-add-line align-bottom me-1"></i> View Prescription</button>
                                        <button type="button" class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#view-diagnosis-{{$prescrip->id}}"><i class="ri-add-fill me-1 align-bottom"></i> View Diagnosis Reports</button>

                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--end row-->





    </div>
    <!-- container-fluid -->
</div>

@include('doctor.modals.show_prescription')
@include('doctor.modals.diagnosis')
@endsection
