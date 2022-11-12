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

Route::get('/', [UserController::class, 'index']);
Route::get('/add-user-page', [UserController::class, 'create'])->name('add-user-page');
Route::post('/add-user', [UserController::class, 'store'])->name('add-user');
Route::get('/{id}/edit-user-page', [UserController::class, 'edit'])->name('edit-user-page');
Route::put('/edit-user', [UserController::class, 'update'])->name('edit-user');
Route::delete('/{id}/delete-user', [UserController::class, 'destroy']);
