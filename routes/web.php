<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\usuarioController;
use GuzzleHttp\Psr7\Request;
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

    return view('welcome');
});

Route::get('/create', [usuarioController::class, 'create']);

Route::get('/game', function(){
    return view('game');
});

Route::get('/index', [usuarioController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'index'])->name('index');

Route::post('deslogar', [LoginController::class, 'destroy'])->name('deslogar');

Route::resource('usuario', usuarioController::class);

Route::resource('login', LoginController::class);

