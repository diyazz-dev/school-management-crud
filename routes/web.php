<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
return view('home');
});

Route::get('/students',[StudentController::class,'index']);
Route::get('/students/create',[StudentController::class,'create']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
Route::put('/students/{id}',[StudentController::class,'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);


Route::get('/teachers',[TeacherController::class,'index']);
Route::get('/teachers/create',[TeacherController::class,'create']);
Route::post('/teachers', [TeacherController::class, 'store']);
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit']);
Route::put('/teachers/{id}',[TeacherController::class,'update']);
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);
