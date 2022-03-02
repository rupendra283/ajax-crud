<?php

use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});


Route::get('/',[EmployeeController::class,'index'])->name('employee.index');
Route::post('/store',[EmployeeController::class,'store'])->name('employee.store');
Route::get('/fetch-all',[EmployeeController::class,'FetchAll'])->name('fetchAll');
Route::get('/edit',[EmployeeController::class,'edit'])->name('employee.edit');
Route::post('/update',[EmployeeController::class,'update'])->name('employee.update');
