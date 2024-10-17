<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store']);
Route::get('/edit/{post}', [PostController::class, 'edit']);
Route::post('/update/{post}', [PostController::class, 'update']);
Route::get('/delete/{post}', [PostController::class, 'delete']);
Route::get('show/{post}', [PostController::class, 'show']);
