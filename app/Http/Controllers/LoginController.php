<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function callView(Request $request){
        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'Usuario e\ou senha não existe(m)!';
        }
        if($request->get('erro') == 2){
            $erro = 'Efetue o Login para continuar';
        }

        return view('site.login', ['erro' => $erro]);
    }
    
    public function callAuthenticate(Request $request){
        
        $regras = [
            'email' => 'required|email',
            'senha' => 'required',
        ];

        $feedback = [
            'email' => 'Insira um email válido',
            'required' => 'O campo :attribute é obrigatório',
        ];

        $request->validate($regras, $feedback);
        


        $email = $request->get('email');
        $password = $request->get('senha');

        //echo "$email | $password";


        $usuario = User::where('email', $email)->where('password', $password)->get()->first();

        //echo "<br><br><br> $usuario";

        if(isset($usuario->name)){            
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('vendedor.index');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
        //echo "teste";
    }

    public function callExit(){

        session_destroy();
        return redirect()->route('site.index');
    }
}
