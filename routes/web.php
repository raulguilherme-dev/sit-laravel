<?php

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

use App\Http\Controllers\UsuarioController;

Route::get('/home', [UsuarioController::class, 'index']);
Route::get('/events/cadastro-usuario', [UsuarioController::class, 'create']);
Route::post('/events', [UsuarioController::class, 'store']);
Route::get('/admim-home', );