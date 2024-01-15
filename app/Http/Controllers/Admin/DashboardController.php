<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use App\Models\Medocs;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $data = [
            'patients' => Patient::paginate(5),
            'appointments' => Appointment::paginate(5),
            'medocs' => Medocs::paginate(5),
            'users' => User::paginate(5),
            'countpatients' => Patient::get()->count(),
            'countappoints' => Appointment::get()->count(),
            'countusers' => User::get()->count(),
            'countmeds' => Medocs::get()->count(),
        ];

        return view('admin.dashboard.index',$data);
    }

}
