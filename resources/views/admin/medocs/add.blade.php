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
                                        <label for="basiInput" class="form-label">Asymmetry</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="asymmetry" name="asymmetry" required>
                                                <option value="">Choose Asymmetry</option>
                                                <option value="Symmetrical">Symmetrical</option>
                                                <option value="Asymmetrical">Asymmetrical</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Borders</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="borders" name="borders" required>
                                                <option value="">Choose borders</option>
                                                <option value="Regular">Regular</option>
                                                <option value="Irregular">Irregular</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="color" class="form-label">Color</label>
                                        <div class="form-icon right">
                                            <input type="text" class="form-control"
                                                id="color" name="color" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="diameter" class="form-label">Diameter</label>
                                        <div class="form-icon right">
                                            <input type="text" class="form-control"
                                                id="diameter" name="diameter" placeholder="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Evolution</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="evolution" name="evolution" required>
                                                <option value="">Choose Evolution</option>
                                                <option value="Inconclusive">Inconclusive</option>
                                                <option value="Evolves">Evolves</option>
                                                <option value="Not Evolves">Not Evolves</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Texture</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="texture" name="texture" required>
                                                <option value="">Choose texture</option>
                                                <option value="rough">Rough</option>
                                                <option value="smooth">Smooth</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Ulceration</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="ulceration" name="ulceration" required>
                                                <option value="">Choose ulceration</option>
                                                <option value="present">Present</option>
                                                <option value="absent">Absent</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="basiInput" class="form-label">Diagnosis</label>
                                        <select class="form-select mb-3" aria-label="Default select example" id="diagnosis" name="diagnosis" required>
                                                <option value="">Choose ulceration</option>
                                                <option value="benign">Benign</option>
                                                <option value="malignant">Malignant</option>
                                                <option value="inconclusive">Inconclusive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="valueInput" class="form-label">Date of Admission</label>
                                        <input type="date" class="form-control" id="valueInput"
                                            placeholder="" name="date" />
                                    </div>
                                </div>


                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="iconrightInput" class="form-label">Physician Note</label>
                                        <div class="form-icon right">
                                            <textarea class="form-control" name="physician_note" id="physician_note"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="recommendation" class="form-label">Recommendation</label>
                                        <div class="form-icon right">
                                            <textarea class="form-control" name="recommendation" id="recommendation"></textarea>
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
