<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

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

Route::get('/home', function () {
    return view('home', [
        'name' => 'JaneshPutra',
        'role' => 'staff',
        'buah'=>['jeruk','apel','jambu',]
        ]);
});
Route::get('/',[StudentController::class,'home'])->middleware('auth');

Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class,'authentication'])->middleware('guest');

Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('/student', [StudentController::class,'index'])->middleware('auth');
Route::get('/student-detail/{id}', [StudentController::class,'show'])->middleware('auth'); 
Route::get('/student-add', [StudentController::class,'create'])->middleware('auth');
Route::post('/student',[StudentController::class,'store'])->middleware('auth');
Route::get('/student-edit/{id}', [StudentController::class,'edit'])->middleware('auth');
Route::put('/student/{id}', [StudentController::class,'update'])->middleware('auth');
Route::get('/student-delete/{id}', [StudentController::class,'delete'])->middleware('auth');
Route::delete('/student-destroy/{id}', [StudentController::class,'destroy'])->middleware('auth');


