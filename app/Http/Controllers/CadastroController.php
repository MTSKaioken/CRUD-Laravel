<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function callView(){
        return view('site.cadastro');
    }
    public function createCadastro(){
        Usuario::create(['nome'=>'kaio','sobrenome'=>'martins',
                         'login'=>'mtskaioken','senha'=>'kaio2011',
                         'email'=>'kaioruan2018@gmail.com',
                         'numero_contato'=>'11 981667180','codigo_postal'=>'08380-030']);

        return view('site.cadastro');
    }

    public function returnAllCadastro(){
        Usuario::all();
        //Usuario::all()->pluck('email'); (para retornar somente os emails)
        return view('site.cadastro');
    }

    public function updateCadastro(){
        //$usuario = Usuario::find($id);
        //$usuario->nome = "novo nome";  
        //$usuario->save(); atualizado, serve para qualquer campo
        // OU $usuario->fill(['email'=>'novo email', etc]);
        // por fim $usuario->save();
        return view('site.cadastro');
    }

    public function deleteCadastro(){
        //$usuario = Usuario::find($id);
        //$usuario->delete(); OU
        //Usuario::where('id', 7)->delete();
        //Usuario::destroy($id); pode excluir mais de um id, separando-os por virgula
        return view('site.cadastro');
    }
}
