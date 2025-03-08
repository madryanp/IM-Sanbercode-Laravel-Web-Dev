<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\genresController;
use App\Http\Controllers\gameController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\IsAdmin;


Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/register', [FormController::class, 'daftar'] );

Route::post('/home', [FormController::class, 'home'] );

Route::middleware(['auth', IsAdmin::class])->group(function () {

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

    Route::delete('/genres/{id}', [genresController::class, 'destroy'])->middleware('auth');
}); 

//*************************************/

//buat nampilin template
// Route::get('/master', function(){
//     return view ('layout.master');
// });

//*************************************/

// CRUD

//C = CREATE Data

// Route::get('/genres/create', [genresController::class, 'create']);

// Route::post('/genres', [genresController::class, 'store']);

//R = Read Data

// Route::get('/genres', [genresController::class, 'index']);
// Route::get('/genres/{id}', [genresController::class, 'show']);

// //U = Update Data

// Route::get('/genres/{id}/edit', [genresController::class, 'edit']);
// Route::put('/genres/{id}', [genresController::class, 'update']);

// //D = Delete Data

// Route::delete('/genres/{id}', [genresController::class, 'destroy']);

//=========================================================================

//KUIS

//create data
Route::get('/game/create', [gameController::class, 'create']);

Route::post('/game', [gameController::class, 'store']);

//Read data

Route::get('/game', [gameController::class, 'index']);
Route::get('/game/{id}', [gameController::class, 'show']);

//update Data

Route::get('/game/{id}/Edits', [gameController::class, 'edit']);
Route::put('/game/{id}', [gameController::class, 'update']);

//Delete Data

Route::delete('/game/{id}', [gameController::class, 'destroy']);



//CRUD BOOKS

Route::resource('books', BooksController::class);


//AUTH
//REGISTER
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'register']);

//LOGIN
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login'); 

//LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/profile', [AuthController::class, 'getprofile'])->middleware('auth');
Route::post('/profile', [AuthController::class, 'createprofile'])->middleware('auth');
Route::put('/profile/{id}', [AuthController::class, 'updateprofile'])->middleware('auth');

Route::post('/comments/{book_id}', [CommentController::class, 'store'])->middleware('auth');





