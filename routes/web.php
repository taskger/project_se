<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminmanagerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddfileController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FileUploadController2;

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
Route::get('admin/adminmanager', [AdminmanagerController::class, 'adminmanager'])->name('manageruser.adminmanager')->middleware('role');        
Route::get('admin/employeemanager', [AdminmanagerController::class, 'employeemanager'])->name('manageruser.employeemanager')->middleware('role');        
Route::resource('admin/contacts', ContactController::class)->middleware('role');       
Route::get('admin/addfile', [AddfileController::class, 'addfile'])->name('addfile.index')->middleware('role');
Route::get('file-upload', [FileUploadController::class, 'index'])->name('file-upload.index');
Route::post('store', [FileUploadController::class, 'store']);



/*Employee*/
Route::get('employee/home', [HomeController::class, 'employeeHome'])->name('employee.home')->middleware('roleStaff');
