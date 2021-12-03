<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    
    public function cadastro(Request $request){

        $msg = '';

        //inclusão
        if($request->input('_token') != '' && $request->input('id') == ''){
            $regras =[
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'email' => 'email',
                'uf' => 'required|min:2|max:2',
            ];

            $feedback = [
                'required' => 'O campo :attribute é obrigatório',
                'email' => 'informe um email válido',
                'nome.min' => 'O campo nome deve ter no minimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no maximo 40 caracteres',
                'uf.min' => 'O campo uf deve ter no minimo 2 caracteres',
                'uf.max' => 'O campo uf deve ter no maximo 2 caracteres',
            ];

            $request->validate($regras, $feedback);
            Fornecedor::create($request->all());

            //redirect
            $msg = 'Cadastro realizado com sucesso!';
        }
        if($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update){
                $msg = 'Atualizado com sucesso!';
            } else {
                $msg = 'Erro ao atualizar!';
            }
            return redirect()->route('vendedor.fornecedor.editar', ['id' => $request->input('id'),'msg' => $msg]);
        }
        return view('vendedor.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function listar(Request $request){

        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('uf', 'like', '%'.$request->input('uf').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->get();

        return view('vendedor.fornecedor.listar', ['fornecedores' => $fornecedores]);       
    }

    public function editar($id, $msg = ''){
        echo "O id selecionado foi: $id";
        $fornecedor = Fornecedor::find($id);
        return view('vendedor.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }
}
