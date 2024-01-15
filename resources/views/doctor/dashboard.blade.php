@extends('layouts.doctor')

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




                <div class="row">

                    <div class="card card-animate">
                        <div class="card-body">

                            <div class="calendar-env">
                                <div class="calendar-body">
                                    <div id="doctor_appointments"></div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>



		</div>



	</div>
	<!-- container-fluid -->
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        var calendar = $('#doctor_appointments');

        calendar.fullCalendar({
            header: {
                left: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay today prev,next'
            },
            editable: false,
            firstDay: 1,
            height: 530,
            events: [
                @foreach ($appointments as $row)
                    {
                        title: '{{$row->patient->name}}',
                        start: '{{ date("Y-m-d", $row["start_timestamp"]) }}',
                        end: '{{ date("Y-m-d", $row["end_timestamp"]) }}',
                        allDay: true
                    },
                @endforeach
            ]
        });
    });
</script>
@endsection
