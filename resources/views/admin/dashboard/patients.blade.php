@php
    use Carbon\Carbon;
@endphp
<div class="col-xl-7">
    <div class="card card-height-100">
        <div class="card-header d-flex align-items-center">
            <h4 class="card-title flex-grow-1 mb-0">Patients Report</h4>
        </div><!-- end cardheader -->
        <div class="card-body">
            <div class="table-responsive table-card">
                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender </th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)

                        <tr>
                            <td>{{$patient->first_name}}</td>
                            <td>{{$patient->last_name}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->email}}</td>
                            <td>{{Carbon::parse($patient->dob)->age}}</td>
                            <td>{{$patient->phone}}</td>
                            <td>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                    <a href="{{url('/admin/patient/view')}}/{{$patient->id}}" class="view-item-btn"><i class="ri-eye-fill align-bottom text-muted"></i> View</a>
                                </li>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>

        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->
