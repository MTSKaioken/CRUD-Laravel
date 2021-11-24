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
            <form action="" method="post">
            Login:<br><input type="text"> <br>
            Senha:<br><input type="password" name="" id=""><br>
            Repita a senha:<br><input type="password" name="" id=""><br>
            Email:<br><input type="email" name="" id=""> <br>
            Repita o Email:<br><input type="email" name="" id=""> <br> <br>
            

            <select name="tipo-usuario">
                <option value="selecione" selected disabled>Selecione:</option>
                <option value="vendedor">Vendedor</option>
                <option value="comprador">Comprador</option>
            </select> <br> <br>

            <input type="button" style="width: 211px;" value="Cadastrar"> <br>
            <a href="{{ route('site.login') }}">Já possui uma conta?</a>
            </form>
        </fieldset>
    </center>
</body>
</html>
