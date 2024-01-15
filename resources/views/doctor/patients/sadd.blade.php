@extends('layouts.reception')

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Patient</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Personal Details</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Personal Details</h4>
                        </div><!-- end card header -->

                        <form method="POST" route="{{route('patient-submit')}}"  enctype="multipart/form-data">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <div class="position-relative d-inline-block">

                                        </div>


                                        <div class="col-xx-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="pro_pic" class="form-label">Upload Image</label>

                                                    <div class="avatar-lg p-1">
                                                        <div class="avatar-title bg-light rounded-circle">
                                                            <img src="assets/images/users/multi-user.jpg" id="companylogo-img" class="avatar-md rounded-circle object-cover" />
                                                        </div>
                                                    </div>

                                                    <input class="form-control form-control-sm" id="pro_pic" type="file">
                                                </div>
                                        </div>

                                        {{-- <div class="col-xxl-12 col-md-6">

                                            <div class="position-absolute bottom-0 end-0">
                                                <label for="company-logo-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                    <div class="avatar-xs cursor-pointer">
                                                        <div class="avatar-title bg-light border rounded-circle text-muted">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                                <input class="form-control d-none" value="" id="company-logo-input" type="file" accept="image/png, image/gif, image/jpeg">
                                            </div>
                                            <div class="avatar-lg p-1">
                                                <div class="avatar-title bg-light rounded-circle">
                                                    <img src="assets/images/users/multi-user.jpg" id="companylogo-img" class="avatar-md rounded-circle object-cover" />
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" />
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" />
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="education" class="form-label">Education</label>
                                                <input type="text" class="form-control" id="education" name="education" placeholder="" />
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="occupation" class="form-label">Occupation</label>
                                                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="" />
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="postCode" class="form-label">PostCode</label>
                                                <input type="text" class="form-control" id="postCode" name="postCode" placeholder="" />
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label class="form-label">Tel number</label>
                                                <div class="input-group" data-input-flag>
                                                    <button class="btn btn-light border" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/images/flags/us.svg" alt="flag img" height="20" class="country-flagimg rounded"><span class="ms-2 country-codeno">+ 1</span></button>
                                                    <input type="number" class="form-control rounded-end flag-input" name="telNumber" value="" placeholder="Enter number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="height" class="form-label">Height</label>
                                                <input type="text" class="form-control" id="height" name="height" placeholder="" />
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="weight" class="form-label">Weight</label>
                                                <input type="text" class="form-control" id="weight" name="weight" placeholder="" />
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="email" class="form-label">Email</label>
                                                <div class="form-icon right">
                                                    <input type="email" class="form-control form-control-icon" id="email" name="email" placeholder="example@gmail.com" />
                                                    <i class="ri-mail-unread-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="dateOfBirth" class="form-label">Date of birth</label>
                                                <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" />
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <label for="nationality" class="form-label">Nationality</label>
                                            <select class="form-select mb-3" aria-label="Default select example" id="nationality" name="nationality">
                                                <option selected>Select country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-6 col-md-6">
                                            <label for="ethnicity" class="form-label">Ethnicity</label>
                                            <select class="form-select mb-3" aria-label="Default select example" id="ethnicity" name="ethnicity">
                                                <option selected>Select</option>
                                            </select>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->

@endsection
