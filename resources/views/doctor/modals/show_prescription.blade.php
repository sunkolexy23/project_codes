@foreach ($prescriptions as $prescrip)
<?php


$carbonDate = \Carbon\Carbon::createFromTimestamp($prescrip->timestamp);

$date = $carbonDate->format('Y-m-d');
$time = $carbonDate->format('H:i:s');
?>

<div class="modal fade" id="view-prescription-{{$prescrip->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PIS</h5>
                <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="prescription_print">
                    <div class="col-lg-12">
                        <div class="card-header border-bottom-dashed p-4">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="flex-grow-1mt-sm-0 mt-3">
                                        <h6 class="text-muted mb-1">Patient: {{$prescrip->patient->name}}</h6>
                                        <p class="text-muted mb-1" id="address-details">Age: {{\Carbon\Carbon::parse($prescrip->patient->birth_date)->age}}</p>
                                        <p class="text-muted mb-0" id="zip-code"><span>Sex:</span> {{$prescrip->patient->sex}}</p>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="flex-grow-1mt-sm-0 mt-3">
                                        <h6 class="text-muted mb-1">Doctor: {{$prescrip->doctor->name}}</h6>
                                        <p class="text-muted mb-1" id="address-details">Date: {{$date}}</p>
                                        <p class="text-muted mb-1" id="address-details">Time: {{$time}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="flex-grow-1 mt-2">
                                    <p class="mt-2"><span class="fw-semibold">NOTES:</span><br />
                                        <span class="text-muted mb-1" id="note">{{$prescrip->note}}
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div>
                                <div class="flex-grow-1 mt-2">
                                    <p class="mt-2"><span class="fw-semibold">MEDICAL HISTORY:</span><br />
                                        <span class="text-muted mb-1" id="note">{{$prescrip->case_history}}
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div>
                                <div class="flex-grow-1 mt-2">
                                    <p class="mt-2"><span class="fw-semibold">MEDICATION:</span><br />
                                        <span class="text-muted mb-1" id="note">{{$prescrip->medication}}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--end card-header-->
                    </div><!--end col-->
                </div><!--end col-->
            </div>
            <div class="modal-footer">
                <div class="hstack gap-2 justify-content-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a onClick="PrintElem('#prescription_print')" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                </div>
            </div>
        </div>
        <!-- modal content -->
    </div>
</div>
@endforeach
<!-- End Page-content -->

<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data)
    {
        var mywindow = window.open('', 'prescription', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Prescription</title>');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
