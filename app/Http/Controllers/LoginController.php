<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function callView(){
        return view('site.login');
    }
    
    public function callAuthenticate(Request $request){
        
        $regras = [
            'login' => 'required',
            'senha' => 'required',
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatório'
        ];

        $request->validate($regras, $feedback);
        
        $email = $request->get('login');
        $password = $request->get('senha');

        $user = new User();
        $usuario = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();

        echo (isset($usuario->name)) ? "Usuario existe!" : "Usuario não existe";


        return view('site.login');
    }
}
