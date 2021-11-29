<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Cadastro</h1>
        <fieldset>
            <form action="{{ route('site.cadastro') }}" method="post">
            @csrf
            <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome">
            <br>{{ $errors->has('nome') ? $errors->first('nome') : ''}}<br>
            <input type="text" name="login" placeholder="Login">
            <br>{{ $errors->has('login') ? $errors->first('login') : ''}}<br>
            
            <input type="password" name="senha" placeholder="Senha">
            <br>{{ $errors->has('senha') ? $errors->first('senha') : ''}}<br>
            <input type="password" name="confirma_senha" placeholder="Repita a Senha">
            <br>{{ $errors->has('confirma_senha') ? $errors->first('confirma_senha') : ''}}<br>

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
</body>
</html>
