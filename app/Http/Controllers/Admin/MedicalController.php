<?php

namespace App\Http\Controllers\Admin;

use App\Models\Medocs;
use App\Models\Patient;
use App\Models\MedocsImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $medocs = Medocs::get();

        $data = [
            'patients' => Patient::get(),
            'medocs' => $medocs
        ];


        return view('admin.medocs.index', $data);

    }


    public function view($id){

        $medocs = Medocs::find($id);

        $data = [
            'patients' => Patient::get(),
            'medocs' => $medocs
        ];



        return view('admin.medocs.view', $data);
    }

    public function add() {

        $medocs = Medocs::get();

        $data = [
            'patients' => Patient::get(),
            'medocs' => $medocs
        ];


        return view('admin.medocs.add',$data);
    }

    public function submit(Request $request) {

        $data = [
            'patient_id' => $request->patient_id,
            'asymmetry' => $request->asymmetry,
            'date' => date('Y-m-d'),
            'borders' => $request->borders,
            'color' => $request->color,
            'diameter' => $request->diameter,
            'evolution' => $request->evolution,
            'texture' => $request->texture,
            'ulceration' => $request->ulceration,
            'physician_note' => $request->physician_note,
            'recommendation' => $request->recommendation,
            'diagnosis' => $request->diagnosis,
            'clinical_assessor' => auth()->user()->name,
            'date_reviewed' => date('d-m-Y')
        ];


        Medocs::create($data);

        return redirect()->route('medical-index');
    }

    public function imageadd(){
        $medocs = Medocs::get();

        $data = [
            'patients' => Patient::get(),
            'medocs' => $medocs
        ];


        return view('admin.medocs.imageupload',$data);
    }

    public function imagesubmit(Request $request){

        $request->validate([
            'images' => 'required',
            'images.*' => 'required|mimes:jpg,png,pdf|max:2048',
        ]);

        $images = [];

        if ($request->hasfile('images')) {

            foreach($request->file('images') as $key => $file){
                // $file = $request->file('images');
                $extension = $file->getClientOriginalExtension();
                $whitelist = array('pdf', 'doc', 'jpeg', 'jpg', 'png');

                if (in_array($extension, $whitelist)) {
                    // $path = $file->store('uploads', 'public');
                    // $path = $file->store('uploads', 'public');
                    // $file->move(public_path('uploads'), $file_name);
                    $file_name = time().rand(1,99).'.'.$file->getClientOriginalExtension();
                    $file->move(public_path('uploads'), $file_name);
                    $images[]['name'] = $file_name;
                } else {
                    return redirect()->back()
                        ->with('message', 'Unaccepted Image Uploaded');
                }
            }

            foreach ($images as $key => $file) {
                $data = [
                    'med_id' => $request->med_id,
                    'date_taken' => $request->date_taken,
                    'equipment' => $request->equipment,
                    'location' => $file_name,
                    'image_resolution' => $request->image_resolution,
                    'image_format' => $request->image_format
                ];
                // dd($data);
                MedocsImages::create($data);
            }

            return redirect()->route('medical-index');
        }

    }
    //
}
