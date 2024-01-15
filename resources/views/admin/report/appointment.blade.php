<div class="col-xxl-4">
				<div class="card">
					<div class="card-header border-0">
						<h4 class="card-title mb-0">Upcoming Schedules</h4>
					</div><!-- end cardheader -->
					<div class="card-body pt-0">
						<div class="upcoming-scheduled">
							<input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
						</div>

						<h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Appointment this Month: <strong>{{date('F')}}</strong></h6>

                        @if ($appointments->count() > 0)



                            @foreach ($appointments as $appoint)


                                <div class="mini-stats-wid d-flex align-items-center mt-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                            27
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">James Bangs (Client) Meeting</h6>
                                        <p class="text-muted mb-0">Nesta Technologies</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <p class="text-muted mb-0">03:45 <span class="text-uppercase">pm</span></p>
                                    </div>
                                </div><!-- end -->

                            @endforeach

                        @else

                                No Appointment this Month

                        @endif

						<div class="mt-3 text-center">
							<a href="javascript:void(0);" class="text-muted text-decoration-underline">View all Appointment</a>
						</div>

					</div><!-- end cardbody -->
				</div><!-- end card -->
			</div><!-- end col -->
