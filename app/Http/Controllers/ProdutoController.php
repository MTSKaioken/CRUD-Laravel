<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(3);
        return view('vendedor.produto.index', ['produtos' => $produtos, 'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vendedor.produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'titulo_produto' => 'required|min:3|max:30',
            'descricao' => 'required|max:50',
            'categoria' => 'required|max:30',
            'preco' => 'required|numeric',
            'url_img_produto' => 'nullable|url',
        ];

        $feedback = [
            'titulo_produto.required' => 'O nome do Produto é Obrigatório',
            'titulo_produto.min' => 'O minimo de caracteres é 3',
            
            'preco.numeric' => 'O campo deve ser um valor em dinheiro',
            'preco.required' => 'O preço do produto é Obrigatório',
            'descricao.required' => 'A descrição do produto é Obrigatória',

            'required' => 'O campo :attribute é Obrigatório',
            'descricao.max' => 'O maximo de caracteres é 50',
            'max' => 'O maximo de caracteres é 30',
            'url_img_produto.url' => 'Informe uma URL válida.',
            
        ];

        $request->validate($regras, $feedback);

        Produto::create($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('vendedor.produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
        return view('vendedor.produto.create', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
        $produto->update($request->all());
        return redirect()->route('produto.show', ['produto' => $produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
        $produto->delete();
        return redirect()->route('produto.index', ['produto' => $produto->id]);
    }
}
