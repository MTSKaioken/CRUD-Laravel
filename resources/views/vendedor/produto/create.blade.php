@extends('vendedor.templates.base')
@section('titulo', 'Adicionar Produto')
@section('conteudo')  
    
<div class="nav-fornecedores">
    <ul>
        <li><a href="">Consulta</a></li>
        <li><a href="{{ route('produto.index') }}">Voltar</a></li>
    </ul>
</div>
    
    <center>
        <fieldset class="fieldsets">
            <legend align="center">Cadastrar Produto</legend>
            {{ $msg ?? '' }}
            <form action="{{ route('produto.store') }}" method="post">
                @csrf
                <input type="text" placeholder="Nome Produto" value="{{ old('titulo_produto')}}" name="titulo_produto"> 
                <br>{{ $errors->has('titulo_produto') ? $errors->first('titulo_produto') : ''}}<br>
                <input type="text" placeholder="Descrição" value="{{ old('descricao')}}" name="descricao">
                <br>{{ $errors->has('descricao') ? $errors->first('descricao') : ''}}<br>
                <input type="text" placeholder="Categoria" value="{{ old('categoria')}}" name="categoria"> 
                <br>{{ $errors->has('categoria') ? $errors->first('categoria') : ''}}<br>
                <input type="text" placeholder="Preço" value="{{ old('preco')}}" name="preco">
                <br>{{ $errors->has('preco') ? $errors->first('preco') : ''}}<br>
                <input type="text" placeholder="URL imagem Produto" value="{{ old('url_img_produto')}}" name="url_img_produto">
                <br>{{ $errors->has('url_img_produto') ? $errors->first('url_img_produto') : ''}}<br>
                <button class="send-form" type="submit">Cadastrar</button>
            </form>
        </fieldset>
    </center>
@endsection