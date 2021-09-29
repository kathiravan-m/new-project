<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

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

Route::get('/register',[UserController::class,'index']); 
Route::get('/login',[UserController::class,'indexLogin']);


// Insert value
Route::post('/insert',[UserController::class,'insertUser'])->name('insert');
Route::post('/login-user',[UserController::class,'insertLoginUser'])->name('login');

// 
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('user_auth');

// 
Route::post('/file-upload',[UserController::class,'fileUpload']);