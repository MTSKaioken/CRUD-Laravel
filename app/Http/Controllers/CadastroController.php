<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function callView(){
        return view('site.cadastro');
    }
    public function createCadastro(Request $request){

        $regras = [
            'name' => 'required|min:3|max:40',
            'login' => 'required|unique:usuarios',
            'password' => 'required|same:confirm_password',
            'confirm_password' => 'required|same:password',
            'email'=> 'required|email|unique:usuarios|same:confirma_email',
            'confirma_email' => 'required|email|same:email',
            'numero_contato' => 'required',
            'codigo_postal' => 'required',
        ];

        $feedback = [
            'required' => 'O Campo :attribute precisa ser preenchido',
            'min' => 'O Campo deve ter no minimo 3 caracteres',
            'nome.max' => 'O Campo deve ter no maximo 40 caracteres',
            'unique' => 'Esse :attribute já existe',

            'email' => 'Email inválido',
            'confirma_email.required' => 'A Confirmação de email deve ser preenchida',
            'email.same' => 'Os emails devem coincidir',
            'confirma_email.same' => 'Os emails devem coincidir',

            'password.same' => 'As senhas devem coincidir',
            'confirm_password.same' => 'As senhas devem coincidir',
            'confirm_password.required' => 'A confirmação de senha deve ser preenchida'
        ];

        $request->validate($regras, $feedback);

        User::create($request->all());       
        return redirect()->route('site.login');
    }

    public function updateCadastro(){
        //$usuario = Usuario::find($id);
        //$usuario->nome = "novo nome";  
        //$usuario->save(); atualizado, serve para qualquer campo
        // OU $usuario->fill(['email'=>'novo email', etc]);
        // por fim $usuario->save();
        return view('site.cadastro');
    }
}
