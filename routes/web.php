<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('home', [PostController::class, 'index'])->name('home');
Route::post('home', [LoginController::class, 'autenticar'])->name('autenticar');



Route::group(['middleware' => 'auth'], function(){
    Route::get('posts/nuevo', [PostController::class, 'create'])->name('posts.create');
    Route::post('posts/nuevo', [PostController::class, 'store'])->name('posts.store');
    Route::get('posts/ver/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('usuarios/nuevo', [UserController::class, 'create'])->name('usuarios.create');
Route::post('usuarios/nuevo', [UserController::class, 'store'])->name('usuarios.store');