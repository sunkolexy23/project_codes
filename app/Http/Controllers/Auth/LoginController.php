<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
{
    $user = auth()->user();

    if ($user->is_admin == 1) {
        return route('admin-dashboard');
    } elseif ($user->is_doctor == 1) {
        return route('doctor-dashboard');
    } elseif ($user->is_accountant == 1) {
        return route('accountant-dashboard');
    } elseif ($user->is_recptionist == 1) {
        return route('receptionist-dashboard');
    } elseif ($user->is_lab == 1) {
        return route('lab-dashboard');
    }

    // Default fallback route if none of the roles match
    return route('default-dashboard');
}


    public function login(Request $request){

        $input = $request->all();



        $this->validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
            );

            if(auth()->attempt(
                array(
                    'email' => $input['email'],
                    'password' => $input['password']
                )
            )) {
                // dd(auth()->user()->is_admin);

                if(auth()->user()->is_admin == 1) {

                    // dd(1);
                    return \redirect()->route('admin-dashboard');

                } elseif(auth()->user()->is_doctor == 1) {

                    return \redirect()->route('doctor-dashboard');


                } elseif(auth()->user()->is_accountant == 1) {

                    return \redirect()->route('accountant-dashboard');


                } elseif(auth()->user()->is_receptionist == 1) {

                    // dd(1);

                    return \redirect()->route('reception-dashboard');

                } elseif(auth()->user()->is_lab == 1) {

                    return \redirect()->route('lab-dashboard');
                }

            } else {

                return redirect()->route('login')->with('error', 'Invalid email or password');

            }
    }
}
