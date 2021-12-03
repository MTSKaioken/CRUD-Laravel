<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function callView(){
        return view('cliente.produto');
    }
    
    public function callCadastro(){
        return view('vendedor.adicionar');
    }

    public function callProdutos(){

    }
}
