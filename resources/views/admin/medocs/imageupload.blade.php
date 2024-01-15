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
                        <form action="{{ route('medical-image-submit')}}" method="POST" enctype="multipart/form-data">
                        <div class="live-preview">
                            <div class="row gy-4">

                                    @csrf
                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Select Medical Record</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="med_id" name="med_id" required>
                                            @foreach ($medocs as $medoc)
                                                <option value="{{$medoc->id}}"> {{$medoc->diagnosis}} Record for {{$medoc->mypatient->first_name}} {{$medoc->mypatient->last_name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="date_taken" class="form-label">Date Image was taken/created</label>
                                        <div class="form-icon right">
                                            <input type="date" class="form-control"
                                                id="date_taken" name="date_taken" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="location" class="form-label">Location</label>
                                        <div class="form-icon right">
                                            <input type="text" class="form-control"
                                                id="location" name="location" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="image_resolution" class="form-label">Image Resolution</label>
                                        <div class="form-icon right">
                                            <input type="text" class="form-control"
                                                id="image_resolution" name="image_resolution" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="image_format" class="form-label">Image Format</label>
                                        <div class="form-icon right">
                                            <input type="text" class="form-control"
                                                id="image_format" name="image_format" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="equipment" class="form-label">Equipment Used</label>
                                        <div class="form-icon right">
                                            <input type="text" class="form-control"
                                                id="equipment" name="equipment" placeholder="" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="lesson-images" class="form-label">Upload Lession Images</label>
                                            <div class="form-icon right">
                                                <input type="file" name="images[]" multiple class="form-control" required/>
                                            </div>
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
