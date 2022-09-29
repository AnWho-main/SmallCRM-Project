<?php
use App\Http\Controllers\Controller; 
use App\Http\Controllers\CompaniesController; 
use App\Http\Controllers\EmployeesController; 
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/',[Controller::class,'view']);
Route::post('/',[Controller::class,'check']);

Route::get('index',[Controller::class,'main']);

Route::get('companies',[CompaniesController::class,'view']);

Route::get('addcom',[CompaniesController::class,'add']);
Route::post('addcom',[CompaniesController::class,'store']);


Route::get('employees',[EmployeesController::class,'view']); 

Route::get('addemp',[EmployeesController::class,'add']);
Route::post('addemp',[EmployeesController::class,'store']);

Route::get('employees/delete/{id}',[EmployeesController::class,'delete']);