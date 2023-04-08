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
use App\Http\Controllers\SelectController;
use App\Http\Controllers\FileUploadController2;
use App\Http\Controllers\OmiseController;
use App\Http\Controllers\Checkpaycon;
use App\Http\Controllers\Checkcay;
use App\Http\Controllers\Payment;
use App\Http\Controllers\FileUploadController3;
use App\Http\Controllers\FileUploadController4;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhotosController;

Route::get('checkcay',[Checkcay::class, 'checkcay'])->name('checkcay.index');
Route::resource('payments',Checkpaycon::class);
Route::get('Money1',[Payment::class,'payment'])->name('Money1.index');
Route::get('success',[Payment::class,'successc'])->name('success.index');
Route::get('back',[Payment::class,'backs'])->name('homes.index');
Route::get('Money1', [Payment::class,'prices'])->name('Money1.index');
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
Route::resource('admin/contacts', ContactController::class)->middleware('role');
Route::resource('admin/contacts', ContactController::class);       
Route::get('selectmain', [SelectController::class, 'index'])->name('selectmain');
Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index')->middleware('roleStaff');
Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create')->middleware('roleUser');
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store')->middleware('roleUser');
Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show')->middleware('roleStaff');
Route::get('contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit')->middleware('roleUser');
Route::put('contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update')->middleware('roleUser');
Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy')->middleware('roleStaff');
Route::resource('admin/contacts', ContactController::class);       
Route::get('admin/addfile', [AddfileController::class, 'addfile'])->name('addfile.index')->middleware('role');

Route::get('axa', [AxaController::class, 'index'])->name('file-upload.index');
Route::get('Axamain', [AxaController::class, 'inout'])->name('Axamain.index');
Route::get('admin/print', [PrintController::class, 'getAllUserdata'])->name('print.index')->middleware('role');
// Route::get('admin/print/download-pdf',[PrintController::class,'downloadPDF']);
Route::resource('adverts', Advertscontroller::class);
Route::get('profile', [ProfileController::class, 'getAllUserdata'])->name('profile.index');


Route::get('photos','App\Http\Controllers\PhotosController@view')->name('photos');
Route::post('photos/store','App\Http\Controllers\PhotosController@store')->name('photos/store');
Route::get('photos2','App\Http\Controllers\PhotosController@view2')->name('photos2');
Route::post('photos/store','App\Http\Controllers\PhotosController@store')->name('photos/store');
Route::get('photos3','App\Http\Controllers\PhotosController@view3')->name('photos3');
Route::post('photos/store','App\Http\Controllers\PhotosController@store')->name('photos/store');
Route::get('photos4','App\Http\Controllers\PhotosController@view4')->name('photos4');
Route::post('photos/store','App\Http\Controllers\PhotosController@store')->name('photos/store');

/*Employee*/
Route::get('employee/home', [HomeController::class, 'employeeHome'])->name('employee.home')->middleware('roleStaff');
Route::resource('posts', PostController::class);
