<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabController extends Controller
{
    //

    public function dashboard(){


    }

    public function pathology(){

        $patients = Patient::get();

        $data  = [
            'patients' => $patients
        ];

        return view('lab.pathology.index',$data);

    }
}
