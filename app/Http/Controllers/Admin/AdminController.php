<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lab;
use App\Models\User;
use App\Models\Nurse;
use App\Models\Patient;
use App\Models\Department;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

    public function dashboard(){

        $accounants = User::where('is_accountant', 1)->get();
        $doctors = User::where('is_doctor', 1)->get();
        $nurse = Nurse::get();
        $lab = Lab::get();
        $recept = User::where('is_receptionist', 1)->get();
        $patients = Patient::get();

        $appointment = Appointment::get();


        $data = [
            'accounants' => $accounants,
            'doctors' => $doctors,
            'nurses' => $nurse,
            'labs' => $lab,
            'receptionists' => $recept,
            'patients' => $patients,
            'appointments' => $appointment
        ];


        return view('admin.dashboard.index', $data);
    }



    public function patientsubmit(Request $request)
    {
        $personalData = [
            'name' => $request->first_name,
            'phone' => $requst->phone,
            'address' => $request->address,
            'email' => $request->email,
            'birth_date' => $request->dob,
            'code' => substr(md5(rand(0, 1000000)), 0, 7),
            'sex' => $request->gender,
            'blood_group' => $request->bgroup,
        ];

        $patient = Patient::create($personalData);
        $patientId = $patient->id;

        $lifestyleData = [
            'patient_id' => $patientId,
            'smoking' => $request->smoking,
            'tattoo' => $request->tattoo,
            'his_bleach' => $request->his_bleach,
            'diet' => $request->diet,
        ];

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
        PatientLifestyle::create($lifestyleData);

        return redirect()->route('patient-index')->with('success', 'Data saved successfully');
    }

    public function patientedit($id) {

        $medocs = Medocs::where('patient_id',$id)->get();
        $patients = Patient::find($id);




        $data = [

            'patient' => $patients,
            'meds' => MedicalDetails::where('patient_id',$id)->first(),
            'lifestyle' => PatientLifestyle::where('patient_id',$id)->first(),

        ];

        if($patients && $data['meds'] && $data['lifestyle']) {

            return view('admn.patients.info',$data);
        } else {

            return redirect()->route('patient-index');

        }

    }


    // Doctor users account

    public function doctor(){


        $doctors = User::where('is_doctor',1)->get();

        $data = [

            'doctors' => $doctors
        ];

        return view('admin.doctors.index', $data);
    }

    // Doctor details creation page

    public function doctoradd(){


        $department = Department::get();

        $data = [

            'departments' => $department
        ];

        return view('admin.doctors.add', $data);
    }



    //Post Doctor details to the database

    public function submitdoctor(Request $request){

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data = [

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'dept' => $request->dept,
            'name' => $request->name,
        ];

        User::create($data);


    }

// Nurse List page

    public function nurse(){


        $nurses = Nurse::get();

        $data = [

            'nurses' => $nurses
        ];

        return view('admin.nurses.index', $data);
    }

    public function nurseview($id){

        $nurse = Nurse::find($id);

        $data = [

            'nurse' => $nurse
        ];


        return view('admin.nurses.info', $data);
    }


    // Add Nurse page
    public function nurseadd(){


        return view('admin.nurses.add');
    }

    public function nursesubmit(Request $request)
    {
        $personalData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'birth_date' => $request->dob,
            'code' => substr(md5(rand(0, 1000000)), 0, 7),
            'sex' => $request->gender,
            'ward' => $request->ward,
        ];

        $patient = Nurse::create($personalData);



        return redirect()->route('nurse-index')->with('success', 'Data saved successfully');
    }





    //Laboratory Personel

    public function lab(){


        $labs = Lab::get();

        $data = [

            'labs' => $labs
        ];

        return view('admin.labs.index', $data);
    }

    public function labview($id){

        $lab = Lab::find($id);

        $data = [

            'lab' => $lab
        ];


        return view('admin.labs.info', $data);
    }


    public function labadd(){


        return view('admin.labs.add');
    }

    public function labsubmit(Request $request)
    {
        $personalData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'birth_date' => $request->dob,
            'code' => substr(md5(rand(0, 1000000)), 0, 7),
            'sex' => $request->gender,
        ];

        $patient = Lab::create($personalData);



        return redirect()->route('lab-index')->with('success', 'Data saved successfully');
    }


    public function receptionist(){


        $receptionists = User::where('is_receptionist',1)->get();

        $data = [

            'receptionists' => $receptionists
        ];

        return view('admin.reception.index', $data);
    }


    public function receptionistadd(){



        return view('admin.reception.add');
    }


}
