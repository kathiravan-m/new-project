<?php
use Illuminate\Support\Facades\Route;

use Package\Post\App\Http\Controllers\PostController;


Route::get('/welcome',[PostController::class,'post']);
Route::post('/add-post',[PostController::class,'insert']);
Route::get('/view',[PostController::class,'showDetails']);
Route::get('/edit',[PostController::class,'editUser']);
Route::get('/delete/{id}',[PostController::class,'userDelete']);
Route::post('/update',[PostController::class,'updateUser']);
Route::get('/curl',[PostController::class,'curl']);