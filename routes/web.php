<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminmanagerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddfileController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
<<<<<<< HEAD
use App\Http\Controllers\SelectController;
=======
use App\Http\Controllers\FileUploadController2;
use App\Http\Controllers\FileUploadController3;
use App\Http\Controllers\FileUploadController4;
>>>>>>> 5522acc20f26d5066e942ff2a536f63d1d0e79b5

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
Route::resource('admin/manageruser', AdminmanagerController::class)->middleware('roleStaff');        
Route::get('admin/adminmanager', [AdminmanagerController::class, 'adminmanager'])->name('manageruser.adminmanager')->middleware('role');        
Route::get('admin/employeemanager', [AdminmanagerController::class, 'employeemanager'])->name('manageruser.employeemanager')->middleware('role');        
Route::resource('admin/contacts', ContactController::class)->middleware('role');
Route::resource('admin/contacts', ContactController::class);       
Route::get('selectmain', [SelectController::class, 'index'])->name('selectmain');

Route::get('file-upload', [FileUploadController::class, 'index'])->name('file-upload.index');
Route::post('store', [FileUploadController::class, 'store']);
Route::get('file-upload2', [FileUploadController2::class, 'index'])->name('file-upload2.index');
Route::post('store', [FileUploadController2::class, 'store']);
Route::get('file-upload3', [FileUploadController3::class, 'index'])->name('file-upload3.index');
Route::post('store', [FileUploadController3::class, 'store']);
Route::get('file-upload4', [FileUploadController4::class, 'index'])->name('file-upload4.index');
Route::post('store', [FileUploadController4::class, 'store']);

Route::get('admin/print', [PrintController::class, 'getAllUserdata'])->name('print.index')->middleware('role');
Route::get('admin/print/download-pdf',[PrintController::class,'downloadPDF']);

/*Employee*/
Route::get('employee/home', [HomeController::class, 'employeeHome'])->name('employee.home')->middleware('roleStaff');
Route::resource('posts', PostController::class);
