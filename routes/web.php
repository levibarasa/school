<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\RecivablesController;
use App\Http\Controllers\UsersController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/register', function () {
    return view('membership.registration');
});


Route::post('/register', [LocationController::class, 'register']);

Route::get('/complete_registartion/{id}', [PaymentsController::class, 'complete']);

Route::Post('/complete_registartion_update', [PaymentsController::class, 'update']);

Route::Post('/verify', [PaymentsController::class, 'verify']);

Route::GET('/verify', [PaymentsController::class, 'verify_view']);


Route::get('/admin', function () {
    return view('scafold.admin');
});



Route::get("donate",[PaymentsController::class, 'donate']);

Route::get("get_involved",[PaymentsController::class, 'getinv']);

Route::post("donate",[PaymentsController::class, 'donateaction']);

Route::post("get_involved",[PaymentsController::class, 'getinvaction']);

Route::resource('users', UsersController::class)->shallow();

Route::resource('payments', RecivablesController::class)->shallow();


Route::resource('events', EventsController::class)->shallow();


