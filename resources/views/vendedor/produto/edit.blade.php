@extends('vendedor.templates.base')
@section('titulo', 'Atualizar Produtos')
@section('conteudo')  
    
<div class="nav-fornecedores">
    <ul>
        <li><a href="{{ route('produto.index') }}">Consulta</a></li>
        <li><a href="{{ route('produto.create') }}">Novo</a></li>
    </ul>
</div>
    
    <center>
        <fieldset class="fieldsets">
            <legend align="center">Atualizar Produto</legend>
            {{ $msg ?? '' }}
            <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="post">
                @csrf
                @method('PUT')
                <input type="text" value="{{ $produto->titulo_produto }} " placeholder="Nome Produto" name="titulo_produto"> 
                <br>{{ $errors->has('titulo_produto') ? $errors->first('titulo_produto') : ''}}<br>
                <input type="text" value="{{ $produto->descricao }}" placeholder="Descrição" name="descricao"> 
                <br>{{ $errors->has('descricao') ? $errors->first('descricao') : ''}}<br>
                <input type="text" value="{{ $produto->categoria }}" placeholder="Categoria" name="categoria"> 
                <br>{{ $errors->has('categoria') ? $errors->first('categoria') : ''}}<br>
                <input type="text" value="{{ $produto->preco }}" placeholder="Preço" name="preco">
                <br>{{ $errors->has('preco') ? $errors->first('preco') : ''}}<br>
                <input type="text" value="{{ $produto->url_img_produto }}" placeholder="URL foto" name="url_img_produto">
                <br><br>
                <button class="send-form" type="submit">Atualizar</button>
            </form>
        </fieldset>

    </center>
@endsection