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
        <fieldset>
            <form action="" method="post">
            @csrf
            Login:<br><input type="text" autofocus> <br>
            Senha:<br><input type="password" name="" id=""><br> <br>
            <input type="button" style="width: 211px;" value="Logar"> <br>
            <a href="">Esqueci minha senha</a> <br>
            <a href="{{ route('site.cadastro') }}">Não possui uma conta?</a>
            </form>
        </fieldset>
    </center>

</body>
</html>
