<?php

namespace App\Http\Controllers\Admin;

use App\Models\Medocs;
use App\Models\Country;
use App\Models\Patient;
use App\Models\Ethnicity;
use Illuminate\Http\Request;
use App\Models\MedicalDetails;
use App\Models\PatientLifestyle;
use App\Http\Controllers\Controller;

class PatientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $patients = Patient::get();

        $data  = [
            'patients' => $patients
        ];

        return view('admin.patients.index',$data);

    }

    public function add() {

        $data = [
            'countries' => Country::get()
        ];

        return view('admin.patients.add',$data);
    }


    public function submit(Request $request)
    {
        $personalData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'birth_date' => $request->dob,
            'code' => substr(md5(rand(0, 1000000)), 0, 7),
            'sex' => $request->gender,
            'blood_group' => $request->bgroup,
            'existing_medical_condition' => $request->input('existing_medical_condition'),
            'his_melanoma' => $request->input('his_melanoma'),
            'fam_melanoma' => $request->input('fam_melanoma'),
            'known_allergies' => $request->input('known_allergies'),
            'lab_test' => $request->input('lab_test'),
            'diagnosis' => $request->input('diagnosis'),
        ];

        $patient = Patient::create($personalData);


        $user = auth()->user();

        if ($user->is_admin == 1) {
            return redirect()->route('patient-index')->with('success', 'Data saved successfully');
        } elseif ($user->is_reception == 1) {
            return redirect()->route('reception-index')->with('success', 'Data saved successfully');
        } elseif ($user->is_doctor) {
            return redirect()->route('doctor-patient')->with('success', 'Data saved successfully');
        }




    }

    public function edit($id) {

        $medocs = Medocs::where('patient_id',$id)->get();
        $patients = Patient::find($id);




        $data = [

            'patient' => $patients,
            'meds' => MedicalDetails::where('patient_id',$id)->first(),
            'lifestyle' => PatientLifestyle::where('patient_id',$id)->first(),

        ];

        if($patients && $data['meds'] && $data['lifestyle']) {

            return view('admin.patients.info',$data);
        } else {

            return redirect()->route('patient-index');

        }

    }


    public function view($id) {

        $patients = Patient::find($id);




        $data = [

            'patient' => $patients,
        ];

        return view('admin.patients.info',$data);



    }


    public function update(Request $request){

        if($request->page == "personal") {

            $personalData = [
                'education' => $request->education,
                'occupation' => $request->occupation,
                'postcode' => $request->postcode,
                'phone' => $request->phone,
                'height' => $request->height,
                'weight' => $request->weight,
                'email' => $request->email,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'nationality' => $request->nationality,
                'ethnicity' => $request->ethnicity,
            ];

            Patient::create($personalData);
            return redirect()->route('patient-index');

        } elseif($request->page == "lifestyle") {
            $lifestyleData = [
                'patient_id' => $patientId,
                'smoking' => $request->smoking,
                'tattoo' => $request->tattoo,
                'his_bleach' => $request->his_bleach,
                'diet' => $request->diet,
            ];

            PatientLifestyle::create($lifestyleData);
            return redirect()->route('patient-index');

        } elseif($request->page == "medical") {

            $medicalData = [
                'patient_id' => $patientId,
                'existing_medical_condition' => $request->existing_medical_condition,
                'his_melanoma' => $request->his_melanoma,
                'fam_melanoma' => $request->fam_melanoma,
                'known_allergies' => $request->known_allergies,
                'blood_group' => $request->blood_group,
                'lab_test' => $request->lab_test,
                'diagnosis' => $request->diagnosis,
            ];

            MedicalDetails::create($medicalData);
            return redirect()->route('patient-index');
        }



    }


    //
}
