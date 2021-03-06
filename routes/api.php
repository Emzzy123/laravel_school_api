<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/addstudent',[StudentController::class,'addstudent']);
Route::get('/list',[StudentController::class,'list']);
Route::delete('/delete/{id}',[StudentController::class,'delete']);
Route::get('/student/{id}',[StudentController::class,'getStudent']);
Route::post('/updatestudent/{id}',[StudentController::class,'updateStudent']);
Route::get('/search/{key}',[StudentController::class,'search']);