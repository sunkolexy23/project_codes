<style>
    .modal{
        --vz-modal-width: 708px !important;
    }
</style>
@foreach ($prescriptions as $prescrip)
<?php


$carbonDate = \Carbon\Carbon::createFromTimestamp($prescrip->timestamp);

$date = $carbonDate->format('Y-m-d');
$time = $carbonDate->format('H:i:s');
?>

<div class="modal fade" id="view-diagnosis-{{$prescrip->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PIS</h5>
                <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="prescription_print">
                    <div class="col-lg-12">

                        <div class="card-body">

                            <div>
                                <table id="example" class="display table table-bordered" style="width:100%; max-width: 100%; overflow-y: auto;">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Report Type</th>
                                            <th>Document Type</th>
                                            <th>Description</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $diagnosis = \App\Models\DiagnosisReport::where('prescription_id',$prescrip->id)->get();
                                        @endphp
                                        @foreach ($diagnosis as $diag)

                                        <?php

                                                $diagdate = \Carbon\Carbon::createFromTimestamp($diag->timestamp);

                                                $newdate = $diagdate->format('Y-m-d H:i:s');
                                                ?>

                                        <tr>
                                            <td>{{$diag->created_at}}</td>
                                            <td>{{$diag->report_type}}</td>
                                            <td>{{$diag->document_type}}</td>
                                            <td>{{$diag->description}}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary create-btn" data-bs-toggle="modal" data-bs-target="#view-prescription-{{$prescrip->id}}"><i class="ri-add-line align-bottom me-1"></i></button>
                                                <button type="button" class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#view-diagnosis-{{$prescrip->id}}"><i class="ri-add-fill me-1 align-bottom"></i></button>

                                            </td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div>

                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Medical Diagnosis</h4>
                                </div><!-- end card header -->

                                <form action="{{ route('diagnosis-submit')}}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="prescription_id" value="{{$prescrip->id}}" />
                                    <div class="row gy-4">


                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="basiInput" class="form-label">Date</label>
                                                <input type="date" class="form-control datepicker" id="basiInput" name="date"
                                                placeholder="" required/>
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="basiInput" class="form-label">Report Type</label>
                                                <select name="report_type" class="form-control" required>
                                                    <option value="xray">Xray</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="basiInput" class="form-label">Date</label>
                                                <input type="file" name="file_name" class="form-control file2 inline btn" data-label="<i class='glyphicon glyphicon-file'></i> Browse" required/>
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="basiInput" class="form-label">Document Type</label>
                                                <select name="document_type" class="form-control" required>
                                                    <option value="image">Image</option>
                                                    <option value="document">Document</option>
                                                    <option value="pdf">Pdf</option>
                                                    <option value="excel">Excel</option>
                                                    <option value="others">Others</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="iconrightInput" class="form-label">Description</label>
                                                <div class="form-icon right">
                                                    <textarea class="form-control" name="description" id="description" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end card-header-->
                    </div><!--end col-->
                </div><!--end col-->
            </div>
        </div>
        <!-- modal content -->
    </div>
</div>
@endforeach
<!-- End Page-content -->
