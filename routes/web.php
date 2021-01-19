<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\RecivablesController;
use App\Http\Controllers\UsersController;  
use App\Http\Controllers\EvntController;  
use App\Http\Controllers\VolunteersController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\DormitoryController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GradingSystemController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\SchoolEventController;
use App\Http\Controllers\StreamController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FeeStructureController;
use Illuminate\Support\Facades\Route; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('landing');
});

Auth::routes(); 


Route::get('/admin', function () {
    return view('scafold.admin');
});



Route::resource('mdm', UsersController::class)->shallow(); 

Route::resource('entities', EntityController::class)->shallow();
Route::resource('grades', GradeController::class)->shallow();
Route::resource('streams', StreamController::class)->shallow();
Route::resource('dormitories', DormitoryController::class)->shallow();
Route::resource('teachers', TeacherController::class)->shallow();
Route::resource('subjects', SubjectController::class)->shallow();
Route::resource('students', StudentController::class)->shallow();
Route::resource('school_events', SchoolEventController::class)->shallow();
Route::resource('guardians', GuardianController::class)->shallow();
Route::resource('grading_systems', GradingSystemController::class)->shallow();
Route::resource('fee_structures', FeeStructureController::class)->shallow();

Route::resource('payments', RecivablesController::class)->shallow();


Route::resource('events', EvntController::class)->shallow();

Route::resource('volunteers', VolunteersController::class)->shallow();

Route::get('datatable', 'VolunteersController@datatable')->name('datatable'); 

