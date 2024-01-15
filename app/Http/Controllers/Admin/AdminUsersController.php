<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

        $data = [
            'users' => User::where('is_admin',1)->get(),
        ];

        return view('admin.users.index', $data);
    }




    public function adduser(){

        return view('admin.users.add');
    }

    public function userupdate(Request $request){


        return view();
    }


    // Delete User Account
    public function delete($id) {

        $user = User::find($id);


        $user->delete();

        $route = "users-index";

        return redirect()->route($route);

    }


    // Create User Account
    public function createuser(Request $request){

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['string'],
            'address' => ['string'],
            'is_admin' => ['string'],
            'is_doctor' => ['string'],
            'is_receptionist' => ['string']
        ]);


        if($request->is_receptionist){

            $route = "reception-index";
        } else if ($request->is_admin = 1){

            $route = "users-index";
        } else if ($request->is_doctor){

            $route = "doctor-index";
        } else {

            $route = "users-index";
        }

        // dd($request);

        // dd($validatedData);

        User::create($validatedData);

        return redirect()->route($route);

    }
}
