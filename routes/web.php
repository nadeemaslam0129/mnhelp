<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalleryController;


Route::get('logout', [AuthController::class,'logout'])->name('logout');
Route::get('/admin/login', [AuthController::class,'admin_login'])->name('admin_login');
Route::post('/admin_login_post', [AuthController::class,'admin_login_post'])->name('admin_login_post');

//admin
Route::group(['middleware' => ['auth']], function () {
Route::get('/admindashboard',[AdminController::class,'admindashboard'])->name('admin.dashboard');
Route::get('/profile',[AdminController::class,'profile'])->name('admin.profile');
Route::post('/adminprofileupdate',[AdminController::class,'adminprofileupdate'])->name('admin.profile.update');
Route::get('/schedule',[AdminController::class,'manageschedule'])->name('admin.schedule');
Route::get('/schedule/create',[AdminController::class,'schedule_create'])->name('schedule.create');
Route::post('/schedule/store',[AdminController::class,'schedule_store'])->name('schedule.store');
Route::get('/schedule/{id}/edit',[AdminController::class,'schedule_edit'])->name('schedule.edit');
Route::post('/schedule/update',[AdminController::class,'schedule_update'])->name('schedule.update');
Route::get('/schedule/destroy/{id}',[AdminController::class,'schedule_delete']);
Route::get('/assembly',[AdminController::class,'assembly_appointment']);
Route::get('/assembly/destroy/{id}',[AdminController::class,'destroy']);

//price
Route::get('price',[PriceController::class,'index'])->name('admin.price');
Route::get('price/create',[PriceController::class,'create'])->name('price.create');
Route::post('price/create',[PriceController::class,'store'])->name('price.store');
Route::get('price/{id}/edit',[PriceController::class,'edit']);
Route::post('price/{id}/edit',[PriceController::class,'update']);
Route::get('price/destroy/{id}',[PriceController::class,'destroy']);

//client says
Route::resource('client', ClientController::class);
Route::get('client/destroy/{id}', [ClientController::class, 'destroy']);
//contact us/help
Route::get('admin/contact',[AdminController::class,'displaycontact'])->name('show.contact');
Route::get('admin/contact/destroy/{id}', [AdminController::class, 'destroy']);
//Gallery
Route::resource('gallery', GalleryController::class);
Route::get('gallery/destroy/{id}', [GalleryController::class, 'destroy']);

});
Route::get('/',[HomeController::class,'index']);
Route::get('appointment',[HomeController::class,'appointment_form']);
Route::post('appointment/process',[HomeController::class,'appointment_email']);
Route::post('assembly/appointment',[HomeController::class,'assembly_appointment_store']);
Route::get('getdate/{date}',[HomeController::class,'getdate']);
Route::get('helpe-form',[HomeController::class,'help_form_view']);
Route::post('helpe-form',[HomeController::class,'contact_store']);
