<?php

use App\Http\Controllers\UserController;
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


// views
Route::get('/', [UserController::class,'homeView']);
Route::get('/create-user', [UserController::class,'createUserView']);
Route::get('/edit-user/{id}', [UserController::class, 'editUserView']);
Route::get('/users', [UserController::class,'getUsers']);
Route::get('/delete-user/{id}', [UserController::class, 'deleteUser']);
// form
Route::post('/new-user', [UserController::class, 'createUser']);
Route::post('/update-user', [UserController::class, 'updateUser']);




