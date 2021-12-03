<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProdutoController;
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

    

Route::get('/login/{erro?}', [LoginController::class, 'callView'])->name('site.login');
Route::post('/login', [LoginController::class, 'callAuthenticate'])->name('site.login');

Route::get('/contato', [ContatoController::class, 'callView'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'saveContato'])->name('site.contato');

Route::get('/cadastro', [CadastroController::class, 'callView'])->name('site.cadastro');
Route::post('/cadastro', [CadastroController::class, 'createCadastro'])->name('site.cadastro');


Route::middleware('autenticacao:padrao,perfil1,parametro1')->prefix('/vendedor') -> group(function() {
    Route::get('/home', [VendedorController::class, 'callView'])->name('vendedor.index');
    
    Route::get('/fornecedor', [FornecedorController::class,'cadastro'])->name('vendedor.fornecedor.adicionar');
    Route::post('/fornecedor', [FornecedorController::class,'cadastro'])->name('vendedor.fornecedor.adicionar');
    Route::get('/fornecedor/listar', [FornecedorController::class,'listar'])->name('vendedor.fornecedor.listar');
    Route::post('/fornecedor/listar', [FornecedorController::class,'listar'])->name('vendedor.fornecedor.listar');
    Route::get('/fornecedor/editar/{id}/{msg?}', [FornecedorController::class,'editar'])->name('vendedor.fornecedor.editar');
    
    Route::get('/produto', [ProdutoController::class,'callCadastro'])->name('vendedor.produto.adicionar');
    Route::get('/produto/listar', [ProdutoController::class,'callView'])->name('vendedor.produto.listar');

    Route::get('/sair', [LoginController::class, 'callExit'])->name('vendedor.sair');
});

Route::middleware('autenticacao:padrao,perfil1,parametro1')->prefix('/cliente') -> group(function() {
    Route::get('/home', [ClienteController::class, 'callView'])->name('cliente.index');
    Route::get('/produto', [ProdutoController::class,'callView'])->name('cliente.produto');
    Route::get('/sair', [LoginController::class, 'callExit'])->name('cliente.sair');
});

Route::fallback(function(){
    echo 'A rota acessada não existe, <a href="'.route('site.index').'">Retornar a index</a>';
});