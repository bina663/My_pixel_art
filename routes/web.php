<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
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

Route::get('/',[UploadController::class,'index']);
Route::get('/upload',[UploadController::class,'upload']);

Route::post('/upload/send',[UploadController::class,'send']);
Route::get('/like/{id}',[UploadController::class,'like']);
Route::delete('/delete/{id}',[UploadController::class,'destroy']);

Route::get("/login",[EventController::class,"index"]);
Route::get("/logout",[EventController::class,"logout"]);
Route::post("/login",[EventController::class,"login"]);

Route::get("/about",[EventController::class,"about"]);

// Route::fallback(function () {
//     return view('perdido');
// });