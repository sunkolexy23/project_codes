<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceptionController extends Controller
{
    //

    // Recepitionist Dashboard

    public function dashboard(){

        $appointment = Appointment::get();


        $data = [

            'appointments' => $appointment
        ];


        return view('reception.dashboard',$data);
    }

    // Recepitionist Patients List

    public function patients(){

        $patients = Patient::get();

        $data  = [
            'patients' => $patients
        ];

        return view('reception.patients.index',$data);

    }

    // Recepitionist Patients View

    public function viewpatient($id){


        $get = Patient::find($id);
        $appointments = Appointment::where('patient_id',$id)->get();

        $data = [

            'patient' => $get,
            'appointments' => $appointments
        ];

        return view('reception.patients.edit',$data);
    }

    // Recepitionist Doctor Appointment List


    public function appointment(){


        $data = [
            'appointments' => Appointment::get()
        ];


        return view('reception.appointment.index', $data);

    }


    // Recepitionist Create Doctor Appointment List
    public function addappointment(){

        $patients = Patient::get();

        $users = User::where('is_doctor',1)->get();

        $data  = [
            'patients' => $patients,
            'users' => $users
        ];


        return view('reception.appointment.add',$data);
    }


    public function appointmentsubmit(Request $request){



        $data = [
            'message' => $request->purpose,
            'type' => $request->type,
            'timestamp' => strtotime($request->date.' '.$request->time ),
            'doctor_id' => $request->doctor,
            'status' => 0,
            'patient_id' => $request->patient_id
        ];

        Appointment::create($data);



        return redirect()->route('reception-appointment');
    }
}
