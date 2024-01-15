<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\PatientsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Auth::routes();


Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('admin/reports', [DashboardController::class, 'index'])->name('dashboard');



Route::get('/admin/patient/add',[App\Http\Controllers\Admin\PatientsController::class, 'add'])->name('patient-add');





// Route::group(["middleware" => "role:admin,worker"], function() {

// });

// Admin access-only routes. This routes can only be accessed by the admin

Route::middleware(['auth', 'is_admin'])->group(function () {

    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin-dashboard');
    Route::get('/admin/patient/index',[App\Http\Controllers\Admin\PatientsController::class, 'index'])->name('patient-index');

    Route::get('/admin/nurse/index',[App\Http\Controllers\Admin\AdminController::class, 'nurse'])->name('nurse-index');
    Route::get('/admin/nurse/view/{id}',[App\Http\Controllers\Admin\AdminController::class, 'nurseview'])->name('nurse-view');
    Route::get('/admin/nurse/add',[App\Http\Controllers\Admin\AdminController::class, 'nurseadd'])->name('nurse-add');
    Route::post('/admin/nurse/submit',[App\Http\Controllers\Admin\AdminController::class, 'nursesubmit'])->name('nurse-submit');

    Route::get('/admin/lab/index',[App\Http\Controllers\Admin\AdminController::class, 'lab'])->name('lab-index');
    Route::get('/admin/lab/view/{id}',[App\Http\Controllers\Admin\AdminController::class, 'labview'])->name('lab-view');
    Route::get('/admin/lab/add',[App\Http\Controllers\Admin\AdminController::class, 'labadd'])->name('lab-add');
    Route::post('/admin/lab/submit',[App\Http\Controllers\Admin\AdminController::class, 'labsubmit'])->name('lab-submit');

    Route::get('/admin/doctor/index',[App\Http\Controllers\Admin\AdminController::class, 'doctor'])->name('doctor-index');
    Route::get('/admin/doctor/add',[App\Http\Controllers\Admin\AdminController::class, 'doctoradd'])->name('doctor-add');


    Route::post('admin/doctor/submit', [AdminUsersController::class, 'submitdoctor'])->name('doctor-aubmit');



    Route::get('/admin/pharmacy/index',[App\Http\Controllers\Admin\AdminController::class, 'pharmacy'])->name('pharm-index');
    Route::get('/admin/laboratory/index',[App\Http\Controllers\Admin\AdminController::class, 'lab'])->name('lab-index');

    Route::get('/admin/receptionist/index',[App\Http\Controllers\Admin\AdminController::class, 'receptionist'])->name('reception-index');
    Route::get('/admin/receptionist/add',[App\Http\Controllers\Admin\AdminController::class, 'receptionistadd'])->name('reception-add');

    Route::get('/admin/accountant/index',[App\Http\Controllers\Admin\PatientsController::class, 'index'])->name('accountant-index');

    Route::get('/admin/user/delete/{id}', [AdminUsersController::class, 'delete'])->name('user-delete');

});


// Doctor access-only routes. This routes can only be accessed by the doctor

Route::middleware(['auth', 'is_doctor'])->group(function () {

    Route::get('/doctor/dashboard', [App\Http\Controllers\DoctorController::class, 'dashboard'])->name('doctor-dashboard');
    Route::get('/doctor/patients',[App\Http\Controllers\DoctorController::class, 'patients'])->name('doctor-patient');
    Route::get('/doctor/patient/{id}',[App\Http\Controllers\DoctorController::class, 'viewpatient'])->name('doctor-patient-view');
    Route::get('/doctor/appointment',[App\Http\Controllers\DoctorController::class, 'appointment'])->name('doctor-appointment');
    Route::get('/doctor/appointment/add',[App\Http\Controllers\DoctorController::class, 'addappointment'])->name('doctor-appointment-add');
    Route::post('/doctor/appointment/submit',[App\Http\Controllers\DoctorController::class, 'appointmentsubmit'])->name('doctor-appointment-submit');
    Route::get('/doctor/prescription',[App\Http\Controllers\DoctorController::class, 'prescription'])->name('doctor-prescription');
    // Route::get('/doctor/prescription/{id}',[App\Http\Controllers\DoctorController::class, 'viewprescription'])->name('doctor-prescription-view');
    Route::get('/doctor/prescription/add',[App\Http\Controllers\DoctorController::class, 'addprescription'])->name('doctor-prescription-add');
    Route::post('/doctor/prescription/submit',[App\Http\Controllers\DoctorController::class, 'prescriptionsubmit'])->name('doctor-prescription-submit');
    Route::post('/doctor/diagnosis/submit',[App\Http\Controllers\DoctorController::class, 'diagnosissubmit'])->name('diagnosis-submit');
    Route::get('/doctor/report',[App\Http\Controllers\DoctorController::class, 'report'])->name('doctor-report');

});

// Receptionist access-only routes. This routes can only be accessed by the receptionist

Route::middleware(['auth', 'is_receptionist'])->group(function () {

    Route::get('/reception/dashboard', [App\Http\Controllers\ReceptionController::class, 'dashboard'])->name('reception-dashboard');
    Route::get('/reception/patients',[App\Http\Controllers\ReceptionController::class, 'patients'])->name('reception-patient');

    Route::get('/reception/patient/{id}',[App\Http\Controllers\ReceptionController::class, 'viewpatient'])->name('reception-patient-view');
    Route::get('/reception/appointment',[App\Http\Controllers\ReceptionController::class, 'appointment'])->name('reception-appointment');
    Route::get('/reception/appointment/add',[App\Http\Controllers\ReceptionController::class, 'addappointment'])->name('reception-appointment-add');
    Route::post('/reception/appointment/submit',[App\Http\Controllers\ReceptionController::class, 'appointmentsubmit'])->name('recept-appointment-submit');
    Route::get('/reception/prescription',[App\Http\Controllers\ReceptionController::class, 'prescription'])->name('reception-prescription');
    Route::get('/reception/report',[App\Http\Controllers\ReceptionController::class, 'report'])->name('reception-report');

});

Route::middleware(['auth', 'is_lab'])->group(function () {

    Route::get('/laboratorist/dashboard', [App\Http\Controllers\LabController::class, 'dashboard'])->name('lab-dashboard');
    Route::get('/laboratorist/pathology_report',[App\Http\Controllers\LabController::class, 'pathology'])->name('lab-pathology');

});



Route::get('/admin/patient/view/{id}',[App\Http\Controllers\Admin\PatientsController::class, 'view'])->name('patient-view');

Route::post('/admin/patient/submit',[App\Http\Controllers\Admin\PatientsController::class, 'submit'])->name('patient-submit');

Route::get('/admin/appointment/index',[App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('appointment-index');
Route::get('/admin/appointment/add',[App\Http\Controllers\Admin\AppointmentController::class, 'add'])->name('appointment-add');
Route::post('/admin/appointment/submit',[App\Http\Controllers\Admin\AppointmentController::class, 'submit'])->name('appointment-submit');



Route::get('/admin/users/index', [AdminUsersController::class, 'index'])->name('users-index');

Route::get('/admin/users/add', [AdminUsersController::class, 'adduser'])->name('user-add');

Route::post('users/createuser', [AdminUsersController::class, 'createuser'])->name('user-create');
