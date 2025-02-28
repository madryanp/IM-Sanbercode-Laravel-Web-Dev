<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\genresController;


Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/register', [FormController::class, 'daftar'] );

Route::post('/home', [FormController::class, 'home'] );

//*************************************/

//buat nampilin template
// Route::get('/master', function(){
//     return view ('layout.master');
// });

//*************************************/

// CRUD

//C = CREATE Data

Route::get('/genres/create', [genresController::class, 'create']);

Route::post('/genres', [genresController::class, 'store']);

//R = Read Data

Route::get('/genres', [genresController::class, 'index']);
Route::get('/genres/{id}', [genresController::class, 'show']);

//U = Update Data

Route::get('/genres/{id}/edit', [genresController::class, 'edit']);
Route::put('/genres/{id}', [genresController::class, 'update']);

//D = Delete Data

Route::delete('/genres/{id}', [genresController::class, 'destroy']);