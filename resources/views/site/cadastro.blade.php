@extends('site.templates.base')
@section('titulo', 'Cadastro')
@section('conteudo')
    <center>
        <h1>Cadastro</h1>
        <fieldset style="width: 30%;">
            <form action="{{ route('site.cadastro') }}" method="post">
                @csrf
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome">
                <br>{{ $errors->has('name') ? $errors->first('name') : ''}}<br>
                <input type="text" name="login" placeholder="Login">
                <br>{{ $errors->has('login') ? $errors->first('login') : ''}}<br>
                
                <input type="password" name="password" placeholder="Senha">
                <br>{{ $errors->has('password') ? $errors->first('password') : ''}}<br>
                <input type="password" name="confirm_password" placeholder="Repita a Senha">
                <br>{{ $errors->has('confirm_password') ? $errors->first('confirm_password') : ''}}<br>

                <input type="text" name="email" value="{{ old('email') }}" placeholder="email@email.com">
                <br>{{ $errors->has('email') ? $errors->first('email') : ''}}<br>
                <input type="text" name="confirma_email" value="{{ old('confirma_email') }}" placeholder="email@email.com">
                <br>{{ $errors->has('confirma_email') ? $errors->first('confirma_email') : ''}}<br>
                
                <input type="numero_contato" name="numero_contato" value="{{ old('numero_contato') }}" placeholder="Numero de contato">
                <br>{{ $errors->has('numero_contato') ? $errors->first('numero_contato') : ''}}<br>
                <input type="codigo_postal" name="codigo_postal" value="{{ old('codigo_postal') }}" placeholder="Codigo Postal">
                <br>{{ $errors->has('codigo_postal') ? $errors->first('codigo_postal') : ''}}<br><br>

                <button type="submit" style="width: 211px;">Cadastrar</button><br>
                <a href="{{ route('site.login') }}">Já possui uma conta?</a>
            </form>
        </fieldset>
    </center>
@endsection
