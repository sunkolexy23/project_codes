<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Models\DiagnosisReport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    //

    public function dashboard(){

        $appointment = Appointment::where('doctor_id',auth()->user()->id)->get();


        $data = [

            'appointments' => $appointment
        ];


        return view('doctor.dashboard',$data);
    }


    public function patients(){

        $patients = Patient::get();

        $data  = [
            'patients' => $patients
        ];

        return view('doctor.patients.index',$data);

    }

    public function viewpatient($id){


        $get = Patient::find($id);
        $appointments = Appointment::where('patient_id',$id)->get();

        $data = [

            'patient' => $get,
            'appointments' => $appointments
        ];

        return view('reception.patients.edit',$data);
    }


    public function appointment(){


        $data = [
            'appointments' => Appointment::where('doctor_id',auth()->user()->id)->get()
        ];


        return view('doctor.appointment.index', $data);

    }

    public function addappointment(){

        $patients = Patient::get();


        $data  = [
            'patients' => $patients
        ];


        return view('doctor.appointment.add',$data);
    }


    public function appointmentsubmit(Request $request){



        $data = [
            'message' => $request->purpose,
            'type' => $request->type,
            'timestamp' => strtotime($request->date.' '.$request->time ),
            'doctor_id' => auth()->user()->id,
            'status' => 0,
            'patient_id' => $request->patient_id
        ];

        Appointment::create($data);

        return redirect()->route('appointment-index');
    }


    public function prescription(){

        $data = [
            'prescriptions' => Prescription::get()
        ];


        return view('doctor.prescription.index', $data);

    }

    public function addprescription(){

        $patients = Patient::get();


        $data  = [
            'patients' => $patients
        ];


        return view('doctor.prescription.add',$data);
    }


    public function prescriptionsubmit(Request $request){

        $data = [
            'timestamp' => strtotime($request->date.' '.$request->time ),
            'doctor_id' => auth()->user()->id,
            'patient_id' => $request->patient_id,
            'case_history' => $request->case_history,
            'medication' => $request->medication,
            'note' => $request->note

        ];

        Prescription::create($data);
    }


    public function diagnosissubmit(Request $request){



        $file = $request->file('file_name');


        if ($request->hasFile('file_name')) {
        // Ensure the directory exists or create it
            $directory = 'uploads/diagnosis_report';
            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0755, true, true);
            }

            // $fn = $file->getClientOriginalName();
            // $filename = "$directory$fn";

            $randomFileName = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();


            $filePath = $file->storeAs($directory, $randomFileName, 'public');


            $data = [

                'prescription_id' => $request->prescription_id,
                'timestamp' => strtotime($request->date),
                'description' => $request->description,
                'report_type' => $request->report_type,
                'document_type' => $request->document_type,
                'file_name' => $filePath
            ];

            DiagnosisReport::create($data);
            $filePath = $file->storeAs($directory, $randomFileName, 'public');

        } else {
            dd(383838);
        }



        // Store the file in the specified directory




    }
}
