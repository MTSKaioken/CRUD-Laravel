<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ClienteController;
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

Route::get('/contato', [ContatoController::class, 'callView'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'saveContato'])->name('site.contato');

Route::get('/cadastro', [CadastroController::class, 'callView'])->name('site.cadastro');
Route::post('/cadastro', [CadastroController::class, 'createCadastro'])->name('site.cadastro');

Route::middleware('log.acesso', 'autenticacao')->prefix('/vendedor') -> group(function() {
    Route::get('/', [VendedorController::class, 'callView'])->name('vendedor.index');
    //Route::get('/produtos', [Controller::class, 'callView'])->name('vendedor.produtos');
});

Route::prefix('/cliente') -> group(function() {
    Route::get('/', [ClienteController::class, 'callView'])->name('cliente.index');
   //Route::get('/compras', [Controller::class, 'callView'])->name('cliente.compras');
});


Route::fallback(function(){
    echo 'A rota acessada não existe, <a href="'.route('site.index').'">Retornar a index</a>';
});