<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobTitleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource("job-titles", JobTitleController::class);
Route::apiResource("employees", EmployeeController::class);
