<?php

use App\Http\Controllers\intervieweeController;
use App\Http\Controllers\interviewQuizeController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('interviewQuize', interviewQuizeController::class);
Route::apiResource('interviewee', intervieweeController::class);
Route::apiResource('student', StudentController::class);
