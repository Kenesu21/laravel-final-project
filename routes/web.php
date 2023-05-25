<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\InputNameController;
use App\Http\Controllers\AgeController;
use App\Http\Controllers\YearVerificationController;
use App\Http\Controllers\loginVerificationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OnTimePayorController;
use App\Http\Controllers\HomeController;
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

Route::get('/dfvsd', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [HomeController::class, 'index']);

Route::get('/name23', function () {
    return 'Kenneth Malabas Escabarte';
});

Route::get('/gallery', function(){
    return view('gallery');
});

Route::get('/log', function(){
    return view('log');

});
Route::get('log3', function(){
    return view('log3');
})->name('log3');

Route::get('test', [test::class, 'Test']);



Route::post('name', [InputNameController::class, 'Name']);
Route::get('name', [InputNameController::class, 'Name']);

Route::post('age', [AgeController::class, 'Age']);
Route::get('age', [AgeController::class, 'Age']);

//Route::get('loginform1', [App\Http\Controllers\YearVerificationController::class, 'yearcheck'])->middleware('check-year');

Route::get('/loginform',[loginVerificationController::class,'verification1'])->name('loginform');
Route::post('/loginform',[loginVerificationController::class,'verification2'])->middleware('formlogin');

Route::get('/dashboard',function(){
    return view('students.index');

})->name('dashboard');

Route::get('/gallery',function(){
    return view('students.gallery');
})->name('gallery');



Route::resource('employees',EmployeeController::class);
Route::resource('students',StudentController::class);
Route::resource('debtors',OnTimePayorController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



