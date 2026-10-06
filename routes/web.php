<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('index');
});

Route::resource('students', StudentController::class);
Route::resource('books', BookController::class);