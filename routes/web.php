<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('admin')->group(function () {
    Route::get('usuario/cadastrar', [UsuarioController::class, 'cadastrar'])->name('usuario.cadastrar');
    Route::post('usuario/criar', [UsuarioController::class, 'criar'])->name('usuario.criar');
});
