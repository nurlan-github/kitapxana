<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('faculties')->group(function (){
    Route::get('/index', [\App\Http\Controllers\FacultyController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\FacultyController::class, 'store']);
    Route::get('/show/{id}', [\App\Http\Controllers\FacultyController::class, 'show']);
    Route::put('/update/{id}', [\App\Http\Controllers\FacultyController::class, 'update']);
    Route::delete('/delete/{id}', [\App\Http\Controllers\FacultyController::class, 'destroy']);

});

Route::prefix('groups')->group(function (){
    Route::get('/index', [\App\Http\Controllers\GroupController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\GroupController::class, 'store']);
    Route::get('/show/{id}', [\App\Http\Controllers\GroupController::class, 'show']);
    Route::put('/update/{id}', [\App\Http\Controllers\GroupController::class, 'update']);
    Route::delete('/delete/{id}', [\App\Http\Controllers\GroupController::class, 'destroy']);

});

Route::prefix('students')->group(function (){
    Route::get('/index', [\App\Http\Controllers\StudentController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\StudentController::class, 'store']);
    Route::get('/show/{id}', [\App\Http\Controllers\StudentController::class, 'show']);
    Route::put('/update/{id}', [\App\Http\Controllers\StudentController::class, 'update']);
    Route::delete('/delete/{id}', [\App\Http\Controllers\StudentController::class, 'destroy']);

});

Route::prefix('categories')->group(function (){
    Route::get('/index', [\App\Http\Controllers\CategoryController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\CategoryController::class, 'store']);
    Route::get('/show/{id}', [\App\Http\Controllers\CategoryController::class, 'show']);
    Route::put('/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update']);
    Route::delete('/delete/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy']);

});

Route::prefix('books')->group(function (){
    Route::get('/index', [\App\Http\Controllers\BookController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\BookController::class, 'store']);
    Route::get('/show/{id}', [\App\Http\Controllers\BookController::class, 'show']);
    Route::put('/update/{id}', [\App\Http\Controllers\BookController::class, 'update']);
    Route::delete('/delete/{id}', [\App\Http\Controllers\BookController::class, 'destroy']);

});

Route::prefix('authors')->group(function (){
    Route::get('/index', [\App\Http\Controllers\AuthorController::class, 'index']);
    Route::post('/create', [\App\Http\Controllers\AuthorController::class, 'store']);
    Route::get('/show/{id}', [\App\Http\Controllers\AuthorController::class, 'show']);
    Route::put('/update/{id}', [\App\Http\Controllers\AuthorController::class, 'update']);
    Route::delete('/delete/{id}', [\App\Http\Controllers\AuthorController::class, 'destroy']);

});


