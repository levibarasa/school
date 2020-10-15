<?php

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

Route::get('/complete_registartion/{id}', [PaymentsContoller::class, 'complete']);

Route::Post('/complete_registartion_update', [PaymentsContoller::class, 'update']);

Route::Post('/verify', [PaymentsContoller::class, 'verify']);

Route::GET('/verify', [PaymentsContoller::class, 'verify_view']);


Route::get('/admin', function () {
    return view('scafold.admin');
});



Route::get("donate",[PaymentsContoller::class, 'donate']);

Route::get("get_involved",[PaymentsContoller::class, 'getinv']);

Route::post("donate",[PaymentsContoller::class, 'donateaction']);

Route::post("get_involved",[PaymentsContoller::class, 'getinvaction']);

Route::resource('users', UsersController::class)->shallow();
