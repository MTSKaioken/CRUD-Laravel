@extends('vendedor.templates.base')
@section('titulo', 'Produtos')
@section('conteudo')  
    
<div class="nav-fornecedores">
    <ul>
        <li><a href="{{ route('produto.create') }}">Novo</a></li>
        <li><a href="{{ route('produto.index') }}">Voltar</a></li>
    </ul>
</div>
    
    <center>
        <fieldset class="fieldsets">
            <legend align="center">{{ isset($produto) ? 'Atualizar' : 'Cadastrar' }} Produto</legend>
            {{ $msg ?? '' }}
            @if(isset($produto->id))
                <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="post">
                @csrf
                @method('PUT')
            @else
                <form action="{{ route('produto.store') }}" method="post">
                @csrf
            @endif
                    <input type="text" placeholder="Nome Produto" value="{{ $produto->titulo_produto ?? old('titulo_produto')}}" name="titulo_produto"> 
                    <br>{{ $errors->has('titulo_produto') ? $errors->first('titulo_produto') : ''}}<br>
                    <input type="text" placeholder="Descrição" value="{{ $produto->descricao ?? old('descricao')}}" name="descricao">
                    <br>{{ $errors->has('descricao') ? $errors->first('descricao') : ''}}<br>
                    <input type="text" placeholder="Categoria" value="{{ $produto->categoria ?? old('categoria')}}" name="categoria"> 
                    <br>{{ $errors->has('categoria') ? $errors->first('categoria') : ''}}<br>
                    <input type="text" placeholder="Preço" value="{{ $produto->preco ?? old('preco')}}" name="preco">
                    <br>{{ $errors->has('preco') ? $errors->first('preco') : ''}}<br>
                    <input type="text" placeholder="URL imagem Produto" value="{{ $produto->url_img_produto ?? old('url_img_produto')}}" name="url_img_produto">
                    <br>{{ $errors->has('url_img_produto') ? $errors->first('url_img_produto') : ''}}<br>
                    <button class="send-form" type="submit">{{ isset($produto) ? 'Atualizar' : 'Cadastrar' }} </button>
                </form>
        </fieldset>
    </center>
@endsection