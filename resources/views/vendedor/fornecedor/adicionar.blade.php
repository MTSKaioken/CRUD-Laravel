@extends('vendedor.templates.base')
@section('titulo', 'Adicionar Fornecedores')
@section('conteudo')  
    <ul>
        <li style="display: inline;"><a href="{{ route('vendedor.fornecedor.listar') }}" style="text-decoration: none;float: right; margin-left: 10px">Consulta</a></li>
        <li style="display: inline;"><a href="{{ route('vendedor.fornecedor.adicionar') }}" style="text-decoration: none;float: right;">Novo</a></li>
    </ul>
    <center>
        <fieldset style="width: 30%">
            <legend align="center">Cadastrar Fornecedor</legend>
            {{ $msg ?? '' }}
            <form action=" {{ route('vendedor.fornecedor.adicionar') }}" method="post">
                <input type="hidden" value="{{ $fornecedor->id ?? '' }}" name="id"> 
                @csrf
                <input type="text" value="{{ $fornecedor->nome ?? old('nome') }}" placeholder="Nome Fornecedor" name="nome"> 
                <br> {{ $errors->has('nome') ? $errors->first('nome') : '' }} <br>
                <input type="text" value="{{ $fornecedor->site ?? old('site') }}" placeholder="URL do site" name="site"> 
                <br> {{ $errors->has('site') ? $errors->first('site') : '' }} <br> 
                <input type="text" value="{{ $fornecedor->uf ?? old('uf') }}" placeholder="UF" name="uf"> 
                <br> {{ $errors->has('uf') ? $errors->first('uf') : '' }} <br> 
                <input type="text" value="{{ $fornecedor->email ?? old('email') }}" placeholder="Email Contato" name="email">
                <br> {{ $errors->has('email') ? $errors->first('email') : '' }} <br>
                <button type="submit" style="width: 211px">Cadastrar</button>
            </form>
        </fieldset>
    </center>
@endsection