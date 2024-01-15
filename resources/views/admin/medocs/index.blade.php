@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Meidcal</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Meidcal</a></li>
                            <li class="breadcrumb-item active">Meidcal List</li>
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
                        <h5 class="card-title mb-0">Meidcal List</h5>
                        <div class="flex-grow-1">
                            <a href="{{ route('medical-add') }}" class="btn btn-info add-btn" ><i class="ri-add-fill me-1 align-bottom"></i> Add Medical Records</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Asymmetry</th>
                                    <th>Borders </th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Date Reviewed</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($medocs as $medoc)
                                <?php $patient = $medoc->mypatient; ?>

                                <tr>
                                    <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                                    <td>{{$medoc->asymmetry}}</td>
                                    <td>{{$medoc->borders}}</td>
                                    <td>{{$patient->email}}</td>
                                    <td>{{Carbon::parse($patient->dob)->age}}</td>
                                    <td>{{$medoc->date_reviewed}}</td>
                                    <td>{{$medoc->created_at}}</td>
                                    <td>
                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                            <a href="{{url('/admin/medicalinfo/view/')}}/{{$medoc->id}}" class="view-item-btn"><i class="ri-eye-fill align-bottom text-muted"></i> View</a>
                                        </li>
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

        {{-- <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-5 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                        <div class="mt-4 text-center">
                            <h4>You are about to delete a task ?</h4>
                            <p class="text-muted fs-14 mb-4">Deleting your task will remove all of
                                your information from our database.</p>
                            <div class="hstack gap-2 justify-content-center remove">
                                <button class="btn btn-link btn-ghost-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--end delete modal -->




    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection
