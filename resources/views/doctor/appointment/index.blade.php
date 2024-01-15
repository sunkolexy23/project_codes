@extends('layouts.doctor')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Appointment</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Appointment</a></li>
                            <li class="breadcrumb-item active">Appointment List</li>
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
                        <h5 class="card-title mb-0">Appointment List</h5>
                        <div class="flex-grow-1">
                            <a href="{{ route('doctor-appointment-add') }}" class="btn btn-info add-btn" ><i class="ri-add-fill me-1 align-bottom"></i> Add Appointment</a>
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
                                    <td>{{$appoint->patient->name}}</td>
                                    <td>{{$appoint->doctor->name}}</td>
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





    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection
