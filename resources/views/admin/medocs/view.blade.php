@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4">
                    <div class="bg-soft-warning">
                        <div class="card-body pb-0 px-4">
                            <div class="row mb-3">
                                <div class="col-md">
                                    <div class="row align-items-center g-3">
                                        <div class="col-md-auto">
                                            <div class="avatar-md">
                                                <div class="avatar-title bg-white rounded-circle">
                                                    <img src="{{asset('assets/images/users/user-dummy-img.jpg')}}" alt="" class="avatar-xs">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div>
                                                <h4 class="fw-bold">Medical Report for  - {{ $medocs->mypatient->first_name }} {{ $medocs->mypatient->first_name }} ({{$medocs->asymmetry}})</h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div class="vr"></div>
                                                    <div>Create Date : <span class="fw-medium"> {{ $medocs->date }}</span></div>
                                                    <div class="vr"></div>
                                                    <div>Date Reviewed : <span class="fw-medium">{{ $medocs->date_reviewed }}</span></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active fw-bold" data-bs-toggle="tab" href="#project-overview" role="tab">
                                        Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" data-bs-toggle="tab" href="#project-documents" role="tab">
                                        Documents
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content text-muted">
                    <div class="tab-pane fade show active" id="project-overview" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-muted">
                                            <h6 class="mb-3 fw-bold text-uppercase">Summary</h6>

                                            <ul class="ps-4 vstack gap-2">
                                                <li>Asymmetry : <strong>{{$medocs->asymmetry}}</strong></li>
                                                <li>Borders : <strong>{{$medocs->borders}}</strong></li>
                                                <li>Evolution : <strong>{{$medocs->evolution}}</strong></li>
                                                <li>Texture : <strong>{{$medocs->texture}}</strong></li>
                                                <li>Diagnosis : <strong>{{$medocs->diagnosis}}</strong></li>
                                                <li>Color : <strong>{{$medocs->color}}</strong></li>
                                                <li>Diameter : <strong>{{$medocs->diameter}}</strong></li>
                                                <li>Ulceration : <strong>{{$medocs->ulceration}}</strong></li>
                                                <li>Assessed by : <strong>{{$medocs->clinical_assessor}}</strong></li>
                                            </ul>

                                            <h5> Physician Note</h5>
                                            <p>{{ $medocs->physician_note}}</p>

                                            <h5> Doctor's Recommendation</h5>
                                            <p>{{ $medocs->recommendation}}</p>



                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->


                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab pane -->
                    <div class="tab-pane fade" id="project-documents" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h5 class="card-title flex-grow-1">Documents</h5>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        @if($medocs->images != null)
                                        @php
                                            $image = $medocs->images;
                                        @endphp


                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="text-muted">
                                                            <h6 class="mb-3 fw-bold text-uppercase">Summary</h6>

                                                            <ul class="ps-4 vstack gap-2">
                                                                <li>Date Taken : <strong>{{$image->date_taken}}</strong></li>
                                                                <li>Equipment Used : <strong>{{$image->equipment}}</strong></li>
                                                                <li>Image Resolution : <strong>{{$image->image_resolution}}</strong></li>
                                                                <li>Image Format : <strong>{{$image->image_format}}</strong></li>

                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>

                                                @foreach ($medocs->documents as $documents)

                                                <div class="col-lg-3">
                                                    <div class="card mt-n5">
                                                        <div class="card-body p-4">
                                                            <img style="width: 120px" src="{{asset('public/uploads/'.$documents->location)}}"/>
                                                        </div>
                                                    </div>
                                                </div>


                                                @endforeach




                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab pane -->

                    <!-- end tab pane -->

                    <!-- end tab pane -->
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div><!-- End Page-content -->
@endsection
