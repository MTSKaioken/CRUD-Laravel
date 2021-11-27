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
            Login:<br><input type="text" > <br>
            Senha:<br><input type="password" name=""><br>
            Repita a senha:<br><input type="password" name=""><br>
            Email:<br><input type="email" name="" > <br>
            Repita o Email:<br><input type="email" name="" > <br> 
            Numero: <br> <input type="numero_contato" name="" > <br> 
            Código Postal: <br> <input type="codigo_postal" name=""> <br> <br>

            <input type="button" style="width: 211px;" value="Cadastrar"> <br>
            <a href="{{ route('site.login') }}">Já possui uma conta?</a>
            </form>
        </fieldset>
    </center>
</body>
</html>
