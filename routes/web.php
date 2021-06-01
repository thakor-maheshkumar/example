<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('employee/add',[EmployeeController::class,'create']);
Route::post('employee/save',[EmployeeController::class,'save']);
Route::get('employee/delete/{id}',[EmployeeController::class,'delete']);
Route::get('employee/edit/{id}',[EmployeeController::class,'edit']);
Route::post('employee/update',[EmployeeController::class,'update']);
Route::get('employee/list',[EmployeeController::class,'index'])->middleware('auth');
Route::get('profile',[EmployeeController::class,'profile']);
/*Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');*/