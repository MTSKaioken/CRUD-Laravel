@extends('vendedor.templates.base')
@section('titulo', 'Adicionar Fornecedores')
@section('conteudo')  
    
<div class="nav-fornecedores">
    <ul>
        <li><a href="{{ route('vendedor.fornecedor.listar') }}">Consulta</a></li>
        <li><a href="{{ route('vendedor.fornecedor.adicionar') }}">Novo</a></li>
    </ul>
</div>
    
    <center>
        <fieldset class="fieldsets">
            <legend align="center">{{ isset($fornecedor) ? 'Atualizar' : 'Cadastrar' }} Fornecedor</legend>
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
                <button class="send-form" type="submit"> {{ isset($fornecedor) ? 'Atualizar' : 'Cadastrar' }} </button>
            </form>
        </fieldset>

    </center>
@endsection