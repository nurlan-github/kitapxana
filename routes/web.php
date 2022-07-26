<?php

use App\Http\Controllers\blade\BookController;
use App\Http\Controllers\blade\CategoryController;
use App\Http\Controllers\blade\FacultyController;
use App\Http\Controllers\blade\GroupController;
use App\Http\Controllers\blade\StudentController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::resource('/categories', CategoryController::class);
Route::resource('/faculties', FacultyController::class);
Route::resource('/groups', GroupController::class);
Route::resource('/students', StudentController::class);
Route::resource('/books', BookController::class);

