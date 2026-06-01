<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('students.index');
});
Route::resource('students', App\Http\Controllers\StudentController::class);
