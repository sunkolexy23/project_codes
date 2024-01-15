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
                    <h4 class="mb-sm-0">Receptionists List</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Receptionists</a></li>
                            <li class="breadcrumb-item active">Receptionists List</li>
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
                        <h5 class="card-title mb-0">Receptionists List</h5>
                        <div class="flex-grow-1">
                            <a href="{{ route('reception-add') }}" class="btn btn-info add-btn" ><i class="ri-add-fill me-1 align-bottom"></i> Add Receptionist</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($receptionists as $receptionist)

                                <tr>
                                    <td>{{$receptionist->name}}</td>
                                    <td>{{$receptionist->email}}</td>
                                    <td>{{$receptionist->phone}}</td>
                                    <td>{{$receptionist->address}}</td>
                                    <td>
                                        {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                            <a href="{{url('/admin/receptionist/view')}}/{{$receptionist->id}}" class="view-item-btn"><i class="ri-eye-fill align-bottom text-muted"></i> View</a>
                                        </li> --}}
                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete">
                                            <a href="{{url('/admin/user/delete')}}/{{$receptionist->id}}" class="btn btn-danger">Delete</a>
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


        <!--end delete modal -->




    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection
