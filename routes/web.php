<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', function () {
    return view('home');
});

// Student
Route::get('/students', [StudentController::class, 'show']);
Route::get('/register-student', [StudentController::class, 'create']);
Route::post('/register-student', [StudentController::class, 'store']);

// Teacher
Route::get('/teachers', [TeacherController::class, 'show']);
Route::get('/register-teacher', [TeacherController::class, 'create']);
Route::post('/register-teacher', [TeacherController::class, 'store']);
