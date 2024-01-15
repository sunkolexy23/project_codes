@php
    use Carbon\Carbon;
@endphp
<div class="col-xl-5">
    <div class="card card-height-100">
        <div class="card-header d-flex align-items-center">
            <h4 class="card-title flex-grow-1 mb-0">Patients Report</h4>
        </div><!-- end cardheader -->
        <div class="card-body">
            <div class="table-responsive table-card">
                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Patient</th>
                            <th>Asymmetry</th>
                            <th>Borders </th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Date Reviewed</th>
                            <th>Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medocs as $medoc)

                        <tr>
                            <td>{{$medoc->mypatient->first_name}} {{$medoc->mypatient->last_name}}</td>
                            <td>{{$medoc->asymmetry}}</td>
                            <td>{{$medoc->borders}}</td>
                            <td>{{$medoc->email}}</td>
                            <td>{{Carbon::parse($medoc->mypatient->dob)->age}}</td>
                            <td>{{$medoc->date_reviewed}}</td>
                            <td>{{$medoc->date_created}}</td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>


        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->
