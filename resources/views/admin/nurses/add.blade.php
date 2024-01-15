@extends('layouts.admin')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add New Nurse Info</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Nurse Information</a></li>
                            <li class="breadcrumb-item active">Nurse Details</li>
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
                        <h4 class="card-title mb-0 flex-grow-1">Nurse Details</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('nurse-submit')}}" method="POST">
                        <div class="live-preview">
                            <div class="row gy-4">

                                    @csrf


                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="name" class="form-label">Nurse Name</label>
                                        <div class="form-icon right">
                                            <input type="text" class="form-control"
                                                id="name" name="name" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="email" class="form-label">Email</label>
                                        <div class="form-icon right">
                                            <input type="email" class="form-control"
                                                id="email" name="email" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="address" class="form-label">Address</label>
                                        <div class="form-icon right">
                                            <textarea class="form-control" name="address" id="address"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="phone" class="form-label">Phone</label>
                                        <div class="form-icon right">
                                            <input type="text" class="form-control"
                                                id="phone" name="phone" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="dateOfBirth" class="form-label">Sex</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="gender" name="gender" required>
                                                    <option value="">Select Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="dateOfBirth" class="form-label">Date of birth</label>
                                        <input type="date" class="form-control" id="dateOfBirth" name="dob" required/>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div class="mb-3">
                                        <label for="dateOfBirth" class="form-label">Ward Allocated</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="ward" name="ward" required>
                                                    <option value="">Select Ward Allocated</option>
                                                <option value="Ward A">Ward A</option>
                                                <option value="Ward B">Ward B</option>
                                                <option value="Ward C">Ward C</option>
                                                <option value="Ward D">Ward D</option>


                                        </select>
                                    </div>
                                </div>










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
