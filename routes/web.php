<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'callView'])->name('site.index');
Route::get('/login', [LoginController::class, 'callView'])->name('site.login');
Route::get('/cadastro', [SignUpController::class, 'callView'])->name('site.cadastro');

Route::prefix('/vendedor') -> group(function() {
    //Route::get('/produtos', [Controller::class, 'callView'])->name('vendedor.produtos');
});

Route::prefix('/cliente') -> group(function() {
   //Route::get('/compras', [Controller::class, 'callView'])->name('cliente.compras');
});


Route::fallback(function(){
    echo 'A rota acessada não existe, <a href="'.route('site.index').'">Retornar a index</a>';
});