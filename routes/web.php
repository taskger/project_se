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
Route::resource('admin/contacts', ContactController::class);       
Route::get('admin/addfile', [AddfileController::class, 'addfile'])->name('addfile.index')->middleware('role');
Route::get('file-upload', [FileUploadController::class, 'index'])->name('file-upload.index');
Route::post('store', [FileUploadController::class, 'store']);
Route::get('axa', [AxaController::class, 'index'])->name('file-upload.index');
Route::get('Axamain', [AxaController::class, 'inout'])->name('file-upload.index');
Route::resource('adverts', Advertscontroller::class);
Route::get('/adverts/am', [AdvertsController::class, 'am'])->name('adverts.am');


/*Employee*/
Route::get('employee/home', [HomeController::class, 'employeeHome'])->name('employee.home')->middleware('roleStaff');
Route::resource('posts', PostnController::class);
