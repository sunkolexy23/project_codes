@extends('layouts.admin')

@section('content')

<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Projects</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
							<li class="breadcrumb-item active">Dahboard</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->

		<div class="row project-wrapper">

			@include('admin.dashboard.breadcrumbs')
			@include('admin.dashboard.appointment')
		</div><!-- end row -->

		<div class="row">
			@include('admin.dashboard.patients')

            @include('admin.dashboard.medocs')


		</div><!-- end row -->



	</div>
	<!-- container-fluid -->
</div>
@endsection
<script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script>
