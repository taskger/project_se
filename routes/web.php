<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminmanagerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddfileController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AxaController;
use App\Http\Controllers\Advertscontroller;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FileUploadController2;
use App\Http\Controllers\OmiseController;
use App\Http\Controllers\Checkpaycon;
use App\Http\Controllers\Checkcay;
use App\Http\Controllers\Payment;
use App\Http\Controllers\FileUploadController3;
use App\Http\Controllers\FileUploadController4;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;

Route::get('checkcay',[Checkcay::class, 'checkcay'])->name('checkcay.index');
Route::resource('payments',Checkpaycon::class);
Route::get('Money1',[Payment::class,'payment'])->name('Money1.index');
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


Route::get('/', [Advertscontroller::class, 'welcome'])->name('welcome');


Auth::routes();

/*User*/
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('roleUser');

/*Admin*/
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');
Route::resource('admin/manageruser', AdminmanagerController::class)->middleware('roleStaff');        
Route::get('admin/adminmanager', [AdminmanagerController::class, 'adminmanager'])->name('manageruser.adminmanager')->middleware('role');        
Route::get('admin/employeemanager', [AdminmanagerController::class, 'employeemanager'])->name('manageruser.employeemanager')->middleware('role');        
Route::resource('admin/contacts', ContactController::class);       
Route::get('admin/addfile', [AddfileController::class, 'addfile'])->name('addfile.index')->middleware('role');
Route::get('file-upload', [FileUploadController::class, 'index'])->name('file-upload.index');
Route::post('store', [FileUploadController::class, 'store']);
Route::get('axa', [AxaController::class, 'index'])->name('file-upload.index');
Route::get('Axamain', [AxaController::class, 'inout'])->name('file-upload.index');
Route::get('admin/print', [PrintController::class, 'getAllUserdata'])->name('print.index')->middleware('role');
Route::get('admin/print/download-pdf',[PrintController::class,'downloadPDF']);
Route::resource('adverts', Advertscontroller::class);
Route::get('profile', [ProfileController::class, 'getAllUserdata'])->name('profile.index');

Route::get('file-upload2', [FileUploadController2::class, 'index'])->name('file-upload2.index');
Route::post('store', [FileUploadController2::class, 'store']);
Route::get('file-upload3', [FileUploadController3::class, 'index'])->name('file-upload3.index');
Route::post('store', [FileUploadController3::class, 'store']);
Route::get('file-upload4', [FileUploadController4::class, 'index'])->name('file-upload4.index');
Route::post('store', [FileUploadController4::class, 'store']);



/*Employee*/
Route::get('employee/home', [HomeController::class, 'employeeHome'])->name('employee.home')->middleware('roleStaff');

 
Route::resource('posts', PostController::class);
