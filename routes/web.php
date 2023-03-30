<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminmanagerController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*User*/
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('roleUser');

/*Admin*/
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');
Route::resource('admin/manageruser', AdminmanagerController::class)->middleware('role');        

/*Employee*/
Route::get('employee/home', [HomeController::class, 'employeeHome'])->name('employee.home')->middleware('roleStaff');
