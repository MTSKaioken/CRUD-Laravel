<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>CRUD - Laravel @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>

    <body>
        @include('app.templates.navbar')
        @yield('conteudo')
        @include('app.templates.footer')
    </body>
</html>