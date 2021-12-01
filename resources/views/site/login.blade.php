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
        <h1>Login</h1>

            <fieldset style="width: 30%;">
                <form action={{ route('site.login') }} method="post">
                @csrf
                Login:<br><input type="text" value="{{ old('login') }}" placeholder="Login" name="login" autofocus>
                <br> {{ $errors->has('login') ? $errors->first('login') : ''}} <br>
                Senha:<br><input type="password" value="{{ old('senha') }}" placeholder="Senha" name="senha">
                <br> {{ $errors->has('senha') ? $errors->first('senha') : ''}} <br>
                <button type="submit" style="width: 211px;">Logar</button><br>
                <a href="">Esqueci minha senha</a> <br>
                <a href="{{ route('site.cadastro') }}">Não possui uma conta?</a>
                </form>
            </fieldset>
    </center>

</body>
</html>
