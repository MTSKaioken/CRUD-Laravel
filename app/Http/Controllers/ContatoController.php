<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Log;

class ContatoController extends Controller
{
    //
    public function __construct(){
        $this->middleware(LogAcessoMiddleware::class);
    }

    public function callView(){
        $motivo_contatos =[
            '1'=> 'Dúvida',
            '2'=> 'Elogio',
            '3'=> 'Reclamação',
        ];

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function saveContato(Request $request){
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'motivo_contato'=> 'required',
            'mensagem' => 'required|max:200',
        ]);
        SiteContato::create($request->all());

        //redirecionar na pagina cadastro
        return redirect()->route('site.index');
    }
}
