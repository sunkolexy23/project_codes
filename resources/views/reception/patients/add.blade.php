@extends('layouts.reception')

@section('content')

<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Patients</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
							<li class="breadcrumb-item active">Wizard</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->

		<div class="row">
			<!-- end col -->
			<div class="col-xl-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title mb-0">Patients</h4>
					</div><!-- end card header -->
					<div class="card-body">
						<form action="{{ route('patient-submit')}}" method="POST" class="form-steps" autocomplete="off">
                            @csrf
							<div class="text-center pt-3 pb-4 mb-1">
								<img src="assets/images/logo-dark.png" alt="" height="17">
							</div>
							<div class="step-arrow-nav mb-4">

								<ul class="nav nav-pills custom-nav nav-justified" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="personal-details-tab" data-bs-toggle="pill" data-bs-target="#personal-details" type="button" role="tab" aria-controls="personal-details" aria-selected="true">Personal Details</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="lifestyle-info-tab" data-bs-toggle="pill" data-bs-target="#lifestyle-info" type="button" role="tab" aria-controls="lifestyle-info" aria-selected="false">Lifestyle Information</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="medical-details-tab" data-bs-toggle="pill" data-bs-target="#medical-details" type="button" role="tab" aria-controls="medical-details" aria-selected="false">Medical Details</button>
									</li>
								</ul>
							</div>

							<div class="tab-content">
								<div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
									@include('admin.patients.personal')

									<div class="d-flex align-items-start gap-3 mt-4">
										<button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="lifestyle-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to more info</button>
									</div>
								</div>
								<!-- end tab pane -->

								<div class="tab-pane fade" id="lifestyle-info" role="tabpanel" aria-labelledby="lifestyle-info-tab">

                                    @include('admin.patients.lifestyle')

									<div class="d-flex align-items-start gap-3 mt-4">
										<button type="button" class="btn btn-light btn-label previestab" data-previous="personal-details-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Personal Details</button>
										<button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="medical-details-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Medical Lifestyle</button>
									</div>
								</div>
								<!-- end tab pane -->

								<div class="tab-pane fade" id="medical-details" role="tabpanel" aria-labelledby="medical-details-tab">
									@include('admin.patients.medical')

                                    <div class="d-flex align-items-start gap-3 mt-4">
										<button type="button" class="btn btn-light btn-label previestab" data-previous="lifestyle-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Lifestyle Information</button>
										<button type="submit" class="btn btn-success right"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
									</div>
								</div>
								<!-- end tab pane -->
							</div>
							<!-- end tab content -->
						</form>
					</div>
					<!-- end card body -->
				</div>
				<!-- end card -->
			</div>
			<!-- end col -->
		</div><!-- end row -->
		<!-- end row -->
	</div>
	<!-- container-fluid -->
</div>


@endsection

