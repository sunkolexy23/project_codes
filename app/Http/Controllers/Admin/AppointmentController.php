<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Medocs;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){


        $data = [
            'appointments' => Appointment::get()
        ];


        return view('admin.appointment.index', $data);

    }

    public function add() {

        $medocs = Medocs::get();
        $users = User::get();

        $data = [
            'patients' => Patient::get(),
            'users' => $users,
        ];


        return view('admin.appointment.add',$data);
    }


    public function submit(Request $request){



        $data = [
            'message' => $request->purpose,
            'type' => $request->type,
            'timestamp' => strtotime($request->date.' '.$request->time ),
            'doctor_id' => $request->doctor,
            'status' => 0,
            'patient_id' => $request->patient_id
        ];

        Appointment::create($data);

        return redirect()->route('appointment-index');
    }

}
