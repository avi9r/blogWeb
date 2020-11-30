<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;



Route::get('/',[HomeController::class,'index'])->name('blog.home');
Route::get('about',[HomeController::class,'about']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('blog',[HomeController::class,'blog']);
Route::get('portfolio',[HomeController::class,'portfolio']);
Route::get('services',[HomeController::class,'services']);

Route::post('/contactus',[HomeController::class,'contactus'])->name('contact.us');


Route::get('/detail/{slug}/{id}',[HomeController::class,'detail']);
Route::get('/save_comment/{slug}/{id}',[HomeController::class,'save_comment']);
// Admin ROutes
Route::get('/admin/login',[AdminController::class,'login']);
Route::post('/admin/login',[AdminController::class,'submit_login']);
Route::get('/admin/logout',[AdminController::class,'logout']);
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashoard');
// Categories
Route::get('admin/category/{id}/delete',[CategoryController::class,'destroy']);
Route::resource('admin/category',CategoryController::class);
// Posts
Route::get('admin/post/{id}/delete',[PostController::class,'destroy']);
Route::resource('admin/post',PostController::class);
// Users
Route::get('admin/user/{id}/delete',[UserController::class,'destroy']);
Route::resource('admin/user',UserController::class);
// Comments
Route::get('admin/comment/{id}/delete',[CommentController::class,'destroy']);
Route::resource('admin/comment',CommentController::class);

// Contact us
Route::get('admin/contact/{id}/delete',[ContactController::class,'destroy']);
Route::resource('admin/contact',ContactController::class);

// Settings
Route::get('/admin/setting',[SettingController::class,'index']);
Route::post('/admin/setting',[SettingController::class,'save_settings']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
